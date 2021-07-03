<?php

namespace App\Http\Controllers\Backed;

use App\Http\Controllers\Controller;

use App\Models\color;
use App\Models\color_svbetting;
use App\Models\svbetting;
use Illuminate\Http\Request;
use App\Models\bet_color;
use Illuminate\Support\Facades\DB;
use Auth;
date_default_timezone_set("Asia/Karachi");
class SCBettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color= color::all();
        $svbetting=svbetting::all();
        return view(
            'admin/admin_betting',
            [
                'color'=> $color,
                'svbetting'=>$svbetting
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        

         $a=1;
         for($i=0; $i < sizeof($request->number); $i++){
             
             

             for($x=$a; $x < sizeof($request->number); $x++) {

                if($request->number[$i] == $request->number[$x]){
return back()->with('error','"'.$request->number[$i].'" '.'Number is Repeated');
                }

             }

             $a++;
         }


      $data=new svbetting;
      $data->auto_id=time();
      $data->status=0;
      $data->save();
         
for($c=0; $c < sizeof($request->number); $c++){

$show=new color_svbetting;

$show->svbetting_id = $data->id;
$show->color_id  = $request->color[$c];
$show->number  = $request->number[$c];
$show->status=0;
$show->save();

}
return  redirect('/sevenColor/betting/view')->with('success','Beeting is Genrated. Please active Your Bet');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {

        $data=svbetting::find($id);
        $data->status =1;
        $data->save();
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\color_svbetting  $color_svbetting
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        $data =svbetting::all();
        return view('admin/admin_viewbet',['data'=>$data]); 
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\color_svbetting  $color_svbetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$edit = DB::table('color_svbettings')->join('colors','color_svbettings.color_id','=','colors.id')->select('color_svbettings.*', 'colors.color_name','colors.color_code')->where('svbetting_id',$id)->get();

   return view('admin/admin_bit_edit',['edit'=>$edit]);               
                                      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\color_svbetting  $color_svbetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, color_svbetting $color_svbetting)
    {
      
        $a=1;
        for($i=0; $i < sizeof($request->number); $i++){
            
            

            for($x=$a; $x < sizeof($request->number); $x++) {

               if($request->number[$i] == $request->number[$x]){
return back()->with('error','"'.$request->number[$i].'" '.'Number is Repeated');
               }

            }

            $a++;
        }


for($c=0; $c < sizeof($request->number); $c++){

$show=color_svbetting::find($request->id[$c]);
$show->number  = $request->number[$c];
$show->save();

}
return  redirect('/sevenColor/betting/view')->with('success','Beeting is Genrated. Please active Your Bet');

    }





    public function play()
    {

        
        $id= Auth::user()->id;
        $data=svbetting::where('status',1)->first();
     
        $today = date("Y-m-d H:i:s"); 
        if(!isset($data->time)){

           
            //if now time is empty haii to ap na 5 minit addd karva or set kar do
            $data=svbetting::find($data->id);

          $date = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($today)));
              $data->time = $date;
              $data->save(); 

             
         $bet_color =bet_color:: where('status',0)->where('svbetting_id',$data->id)->where('user_id',$id)->first();
         $show=color::all();
        return view('bet',compact('data','show','bet_color'));



        }else if($data->time < $today){


            //phala sa time jo haii wo abi k time sa chota haii
            //ager haii to 
            
        $data= svbetting::where('status',1)->where('id','!=',$data->id)->first();
    
        $time=svbetting::find($data->id);
        $date = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($today)));

        $time->time = $date;
        $time->save();

        $bet_color =bet_color:: where('status',0)->where('svbetting_id',$data->id)->where('user_id',$id)->first();
        $show=color::all();
        return view('bet',compact('data','show','bet_color'));

        
        }else{
           
             $bet_color =bet_color:: where('status',0)->where('svbetting_id',$data->id)->where('user_id',$id)->first();
            $show=color::all();
             return view('bet',compact('data','show','bet_color'));
        }
 


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\color_svbetting  $color_svbetting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=svbetting::find($id);
        $data->delete();
        return response()->json([$id]);
    }
}
