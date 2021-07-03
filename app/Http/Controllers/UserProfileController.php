<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_profile;
use Illuminate\Http\Request;
use Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->file('pf_photo')){
            $file =  $request->file('pf_photo');
            $ext=$file->extension();
            if($ext !="png" && $ext !="jpg"){
                return back()->with('error_image','Profile image Must be PNG OR JPG Formate');
            }
            // @unlink(public_path('upload/user_image/'.$adminData->profile_photo_path));

        $file_name = hexdec(uniqid()).$file->getClientOriginalName();


        $file->move(public_path('upload/user_image'),$file_name);
       
    }

        $id= Auth::user()->id;
        $data=User::find($id);
        $data->name=$request->user_name;
        $data->profile_photo_path=$file_name;

        $data->save();
        
        
        $userprofile=new user_profile;
        $userprofile->user_id = $id;
        $userprofile->country_id = $request->country_id;
        $userprofile->state_id= $request->state_id;
        $userprofile->mobile_number = $request->mobile_number;
        $userprofile->whatsapp_number = $request->whatsapp_number;
        
        $userprofile->email_address = $request->email_address;
        $userprofile->address1 = $request->address1;
        $userprofile->address2 = $request->address2;
        $userprofile->city_name = $request->city_name;
        $userprofile->pincode = $request->pincode;
        $userprofile->save();
        
        return redirect('/dashboard')->with("success","User Is ADD Successfully");


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=User::find($id);
        $show=user_profile::where('user_id',$id)->first();

        return view('user_profile',compact('data'),['show'=>$show]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    $file =  $request->file('pf_photo');

                    if(isset($file)){
                $data=User::find($request->user_id);



                if($request->file('pf_photo')){
                    $file =  $request->file('pf_photo');
                    $ext=$file->extension();
                    if($ext !="png" && $ext !="jpg"){
                        return back()->with('error_image','Profile image Must be PNG OR JPG Formate');
                    }
                     @unlink(public_path('upload/user_image/'.$data->profile_photo_path));
        
                $file_name = hexdec(uniqid()).$file->getClientOriginalName();
        
        
                $file->move(public_path('upload/user_image'),$file_name);
               
            }
        
                $data->name=$request->user_name;
                $data->profile_photo_path=$file_name;
        
                $data->save();
                
                
                $userprofile=user_profile::find($request->user_profiles_id);
             
                $userprofile->country_id = $request->country_id;
                $userprofile->state_id= $request->state_id;
                $userprofile->mobile_number = $request->mobile_number;
                $userprofile->whatsapp_number = $request->whatsapp_number;
                
                $userprofile->email_address = $request->email_address;
                $userprofile->address1 = $request->address1;
                $userprofile->address2 = $request->address2;
                $userprofile->city_name = $request->city_name;
                $userprofile->pincode = $request->pincode;
                $userprofile->save();









                    }else{

                        
                
                        $data=User::find($request->user_id);
                        echo $request->user_name;
                        $data->name=$request->user_name;
                
                        $data->save();
                        
                        
                        $userprofile=user_profile::find($request->user_profiles_id);
                        $userprofile->country_id = $request->country_id;
                        $userprofile->state_id= $request->state_id;
                        $userprofile->mobile_number = $request->mobile_number;
                        $userprofile->whatsapp_number = $request->whatsapp_number;
                        
                        $userprofile->email_address = $request->email_address;
                        $userprofile->address1 = $request->address1;
                        $userprofile->address2 = $request->address2;
                        $userprofile->city_name = $request->city_name;
                        $userprofile->pincode = $request->pincode;
                        $userprofile->save();
        }
        return redirect('/dashboard')->with("success","User Is ADD Successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
