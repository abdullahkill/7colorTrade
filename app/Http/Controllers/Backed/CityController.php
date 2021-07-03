<?php

namespace App\Http\Controllers\Backed;

use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = city::all();
        $show = State::all();
        return view('admin/admin_city',['data'=>$data,'show'=>$show]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=new city;
        $data->city_name=ucwords($request->city_name);
        $data->state_id=$request->state_id;
        $data->save();
        $show = State::find($request->state_id);
        return response()->json([$data,$show]);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $data=city::find($id);
        $show = State::all();
        return response()->json([$data,$show]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=city::find($request->id);
        $data->state_id=$request->state_id;
        $data->city_name=ucwords($request->city_name);
        $data->save();
        $show = State::find($request->state_id);
        return response()->json([$data,$show]);
    }

    public function user_store($id)
    {


        $data=city::where('state_id',$id)->take(100)->get();
        
        return response()->json([$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=city::find($id);
        $data->delete();
        return response()->json([$id]);
    }
}
