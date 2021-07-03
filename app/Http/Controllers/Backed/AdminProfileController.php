<?php

namespace App\Http\Controllers\Backed;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Image;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminData=Admin::find(1);
        return view('admin/admin_profile',compact('adminData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_password(Request $request)
    {
        $hashedPassword = Admin::find(1)->password;
        if(Hash::check($request->old_password,$hashedPassword)){
           
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->new_password);
            $admin->save();
            Auth::logout();
           
         return redirect()->route('admin.logout');
        }else{
           
             return back()->with('password','Old passoword is incorrect');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $admin = Admin::find(1);
        $admin->name = $request->name;
        $admin->save();
        return back()->with('userName','You new name is  '.$admin->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $admin = Admin::find(1);
        $admin->name = $request->name;
        $admin->save();
        return back()->with('userName','You name us update to '.$admin->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {


        $adminData = Admin::find(1);
        if($request->file('pf_photo')){
            $file =  $request->file('pf_photo');
            $ext=$file->extension();
            if($ext !="png" && $ext !="jpg"){
                return back()->with('error_image','Profile image Must be PNG OR JPG Formate');
            }
            @unlink(public_path('upload/admin_images/'.$adminData->profile_photo_path));

        $file_name = hexdec(uniqid()).$file->getClientOriginalName();


        $file->move(public_path('upload/admin_images'),$file_name);
       
    }

        $adminData->profile_photo_path = $file_name;

        $adminData->save();
        return back()->with('success_image','Profile is Updated');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
