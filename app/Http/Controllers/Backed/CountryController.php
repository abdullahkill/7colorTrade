<?php

namespace App\Http\Controllers\Backed;

use App\Http\Controllers\Controller;
use App\Models\country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('states')
            ->join('countries', 'states.country_id', '=', 'countries.id')->select('states.*', 'countries.country_name')
            ->get();
;
        $show = country::all();
        return view('admin/admin_state',['data'=>$data,'show'=>$show]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=new State;
        $data->country_id=$request->country_id;
        $data->state_name=ucwords($request->state_name);
        $data->save();
        $show = country::find($request->country_id);
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
        $data=State::find($id);
        $show = country::all();
        return response()->json([$data,$show]);
    }
    public function user_store($id)
    {


        $data=State::where('country_id',$id)->take(100)->get();
        
        return response()->json([$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=State::find($request->id);
        $data->country_id=$request->country_id;
        $data->state_name=ucwords($request->state);
        $data->save();
        $show = country::find($request->country_id);
        return response()->json([$data,$show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=State::find($id);
        $data->delete();
        return response()->json([$id]);
    }
}
