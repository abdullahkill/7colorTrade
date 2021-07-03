<?php

namespace App\Http\Controllers;

use App\Models\bet_color;
use Illuminate\Http\Request;
use App\Models\svbetting;
use App\Models\color_svbetting;
use App\Models\User;
use App\Models\color;
use Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\WinnersNotification;

date_default_timezone_set("Asia/Karachi");
class BetOnColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $id= Auth::user()->id;
        $data=new bet_color;
        $data->user_id=$id;
        $data->color_id  = $request->color_id;
        $data->svbetting_id = $request->auto_id;
        $data->number = $request->number;
        $data->bet = $request->result;
        $data->status = 0;
        $data->save();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)

    {

$id;


        $data=svbetting::find($id);


        $data->time;

        $today = date("Y-m-d H:i:s");

       $date = date('Y-m-d H:i:s',strtotime('+2 minutes',strtotime($today)));
       
       $dates = date('Y-m-d H:i:s',strtotime('+1 minutes',strtotime($today)));
       
if($data->time  > $date){

    $time = 0;
    $bet_color=0;
    $show=0;

    
return response()->json([$time,$bet_color,$show]);
}elseif ($data->time < $date  && $data->time > $dates){
  
    $time = 1;
    $bet_color=0;
    $show=0;

    
return response()->json([$time,$bet_color,$show]);

}else{













//   ------------------------------------------- Start new FUnction for changing status of user TO losser ---------------------------------------------------------------
function looser($id){


    $bit_losser =bet_color:: where('svbetting_id',$id)->where('status',0)->get();


  
    for($a=0; $a < sizeof($bit_losser); $a++){
      
        
        
      $bit_total =bet_color::find($bit_losser[$a]['id']);
      $bit_total->status=2;
      $bit_total->save();

      $user_id=$bit_losser[$a]['user_id'];
 $svbetting=svbetting::find($id);

 $period= $svbetting->auto_id;
      $user=User::where('id',$user_id)->first();
      
      $offerData ="You lost bet of Period".  $period;
      Notification::send($user, new WinnersNotification($offerData));


       }


  
}
//   ------------------------------------------- end new FUnction for changing status of user TO losser ---------------------------------------------------------------




//   ------------------------------------------- Start new FUnction for changing status of user ---------------------------------------------------------------
function winner($id,$color,$number){



    $bit_hi =bet_color:: where('svbetting_id',$id)->where('number',$number)->where('color_id',$color)->where('status',0)->get();
  $bit_total=$bit_hi;

  $size=sizeof($bit_total);

    for($a=0; $a < $size; $a++){
    
       $bet=$bit_total[$a]['bet'];


       $amount= $bet*2;

       $user_id=$bit_total[$a]['user_id'];

        $user=User::where('id',$user_id)->first();
        $winning_amount= $user->amount + $amount;
        $user->amount=$winning_amount;
             $user->save();
         
             $svbetting=svbetting::find($id);

             $period= $svbetting->auto_id;


        $offerData ="You Won Bet of  Period".$period;
        Notification::send($user, new WinnersNotification($offerData));
        
             $bit_hi =bet_color::find($bit_total[$a]['id']);

      $bit_hi->status=1;
      $bit_hi->save();
     
    }
    


}
//   ------------------------------------------- END new FUnction  for changing status of user ---------------------------------------------------------------















            // -------------------------function start-----------------------------------------
        function store($color,$number, $id)
        {
           

            $bit_total =bet_color:: where('svbetting_id',$id)->where('number',$number)->where('color_id',$color)->get();
            $bit_total;
   
            if(sizeof($bit_total)==0){
                return [] ;
    
            
            }else{
            $op=0;
            for($a=0; $a < sizeof($bit_total); $a++){
             $bet=$bit_total[$a]['bet']; 
             $op += $bet;  
            }

           return   $array=array($op,$color,$number);


        }
        }


        //  ---------------------------------------function end-------------------------------------------
        $today = date("Y-m-d H:i:s"); 
        $data =svbetting::find($id);
        
       $new =color_svbetting::where('svbetting_id',$id)->get();



  //  ---------------------------------------for LOOP Start for geting function Data-------------------------------------------
      
for( $i=0; $i < sizeof($new); $i++){

    $color=$new[$i]['color_id'];
    $number=$new[$i]['number'];
   $array[]=store($color, $number, $id);
 
 
}



  //  ---------------------------------------for LOOP end tart for get function Data-------------------------------------------
      

//   -------------------------------------------  Start loop for removing  empty array -----------------------------------------------
$size=sizeof($array);
for($k=0; $k < $size; $k++){
 $k."</br>";
  if(sizeof($array[$k])==0){
    
     unset($array[$k]);
    }else{
 }

 
}

//   ------------------------------------------- End loop for removing  empty array -----------------------------------------------
 

//   ------------------------------------------- loop for sort array ---------------------------------------------------------------


for($s=1; $s < sizeof($array); $s++){

    
for($e=0; $e < $s; $e++){


    
        
    if($array[$s][0]    < $array[$e][0] ){

        $old_value   = $array[$s];
        $new         = $array[$e];

        $array[$e] = $old_value;
        $array[$s] = $new;

    }

    
}



 }

//   ------------------------------------------- END loop for sort array ---------------------------------------------------------------
 if(sizeof($array) == 0 ){

 }elseif(sizeof($array) == 1 ){
$first_smell_amount=$array[0][0];
$first_smell_color=$array[0][1];
$first_smell_number=$array[0][2];
 winner($id, $first_smell_color,$first_smell_number);
 }else{
    $first_smell_amount=$array[0][0];
    $first_smell_color=$array[0][1];
    $first_smell_number=$array[0][2];
     winner($id, $first_smell_color,$first_smell_number);

$secound_smell_amount=$array[1][0];
$secound_smell_color=$array[1][1];
$secound_smell_number=$array[1][2];
winner($id, $secound_smell_color,$secound_smell_number);
 }



looser($id);









//  genrate new priod




        $data=svbetting::find($id);

        $data->status=2;
        $data->save();

        $time=svbetting::where('status',1)->first();

        $today = date("Y-m-d H:i:s");
        $show=color::all();

          $date = date('Y-m-d H:i:s',strtotime('+5 minutes',strtotime($today)));
              $time->time = $date;
              $time->save(); 


return response()->json([$time,$show]);

    }









}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($color,$number, $id)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bet_color  $bet_color
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bet_color  $bet_color
     * @return \Illuminate\Http\Response
     */
    public function edit(bet_color $bet_color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bet_color  $bet_color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bet_color $bet_color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bet_color  $bet_color
     * @return \Illuminate\Http\Response
     */
    public function destroy(bet_color $bet_color)
    {
        //
    }
}
