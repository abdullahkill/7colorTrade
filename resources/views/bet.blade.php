@extends('layout/layout')
@section('content')

<div class="container-fluid number_main-cover">
    <div class="card login-form pro_main_cover col-md-11 offset-md-0 ">
        <div class="card-body">
            <h4 class="card-title "><b>Play Game</b></h4>
            <div class="card-text">
                <form class= "form-cover">
                    <div class="row col-12" id="ajax-div">

                        @if(isset($bet_color))



                        @foreach ($show as $shows)
                        <div class="form-group d-flex">
                            <button  onclick="editCountry('{{$shows->id}}','{{$shows->color_code}}','{{$shows->color_code_2}}')" class="popup_radio-btn btn disabled" 
                                style="background-color:{{$shows->color_code}}!important;color: white;   border: 5px solid  {{$shows->color_code}}!important;  background: {{$shows->color_code}};
                                background: linear-gradient(270deg, {{$shows->color_code_2}} 49%, {{$shows->color_code}} 49%);
                                
                                " disabled></button>
                           
                        </div>
                        @endforeach
                        @else
                            @php
                            $i=0;
                            @endphp
                        @foreach ($show as $shows)
                    
                            <div class="form-group d-flex">
                            <a  onclick="editCountry('{{$shows->id}}','{{$shows->color_code}}','{{$shows->color_code_2}}')" href="#popup1" class="popup_radio-btn" 
                                style="background-color:{{$shows->color_code}}!important;color: white;   border: 5px solid  {{$shows->color_code}}!important;  background: {{$shows->color_code}};
                                background: linear-gradient(270deg, {{$shows->color_code_2}} 49%, {{$shows->color_code}} 49%);
                                
                                "></a>
                           
                        </div>
                                           @endforeach 


                        @endif

                    </div>
                    <span id="time_clock">
                        <div class="clockdiv row" data-date="{{$data->time}}" >
                        </span>
                    <input type="hidden" name="time" id="time" value="{{$data->time}}" >
                    <div class="col-md-4 col-12">
                        <span class="minutes"></span>
                        <div class="smalltext">M</div>
                    </div>
                    <div class="col-md-4 col-12">
                        <span class="seconds"></span>
                        <div class="smalltext">Sec</div>
                    </div>
   
        </div>
        </div><br>

        


        <span><b>Results</b></span>
        <div class="form-group">
        </div>

        <table class="table table-striped table-responsive-sm responsive-md">
            <thead>
                <tr>
                    <th>Period</th>
                    <th>Winning Coin</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->auto_id}}</td>
                    <td>0019YR</td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div><br><br><br>

    <!-- ((((((((((((((((((((((((((((((******** Popup ********)))))))))))))))))))))))))))))) -->
    <div id="popup1" class="overlay">

        <div class="popup">

            </form>
            <form method="post" action="{{ route ('bet_user')}}">
                @csrf
                <div class="popup_heading" id="header" style=" background: linear-gradient(rgba(0, 0, 255, 1)); color: white;">
                    <h3>Number Selected</h3>
                </div>
                <a class="close" href="#">&times;</a>
                <div class="popup_content">
                    <div class="form-group d-flex">
                       <span id="btn_show"></span>
                        <select name="number" id="number" class="form-control popup_form ml-2">

                            <option value="0" disabled selected>Select Number</option>
                            @for($i=0; $i <10; $i++) <option value="{{$i}}">{{$i}}</option>
                                @endfor
                        </select>
                    </div>
                    <div class="shadow" style="display: flex; align-items: center; justify-content: center; border-style: outset; border: none;" class="col-md-8">
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <a href="javascript:void(0)" class="btn btn-secondary btn-sm  mb-3"
                                    onclick="multiFunction(this.innerHTML)">10</a>
                            </div>
                            <div class="col-md-3 col-4">
                                <a href="javascript:void(0)" class="btn btn-light btn-sm  mb-3"
                                    onclick="multiFunction(this.innerHTML)">100 </a>
                            </div>
                            <div class="col-md-3 col-4">
                                <a href="javascript:void(0)" class="btn btn-light btn-sm   mb-3"
                                    onclick="multiFunction(this.innerHTML)">1000 </a>
                            </div>
                            <div class="col-md-3 col-4">
                                <a href="javascript:void(0)" class="btn btn-light btn-sm  mb-3 "
                                    onclick="multiFunction(this.innerHTML)">10000 </a>
                            </div>
                        </div>
                    </div></br></br>
                    <div class="col-md-12 plus_btn" >
                        <div> <a href="javascript:void(0)" class="" onclick="minFunction()">-</a></div>
                        <div><span id="add1">1<span></div>
                        <div><a href="javascript:void(0)" onclick="addFunction()">+</a></div>
                    </div>

                    @php
                    $today = date("Y-m-d H:i:s");
                    $date_time = date('Y-m-d H:i:s',strtotime(' +2 minutes',strtotime($today)));
                    @endphp


                    <input type="hidden" value="{{$date_time}}" id="date_time">

                    <input type='hidden' id="color_id" name="color_id">
                    <input type="hidden" id="first_number" value="10">
                    <input type="hidden" id="secound_number" value="1">
                    <input type="hidden" name="auto_id" id="auto_id" value="{{$data->id}}">

                    <input type="hidden" id="result1" name="result" value="10">
                    <p>Total contract money is <span id="result"> 10 </span></p>
                    <input type="submit" id="btn-bet" value="Place Bet 1">
            </form>
        </div>
        <div class="popup_p">
            <span>Please ensure you have sufficient balance in wallet to place the bet</span>
        </div>
    </div>
    <div class="content">

    </div>
</div>
</div>

</div>
</div>

@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#number").change(function () {
            var hi = $('#number').val();

            $('#change').html(hi);
        });
    });

</script>
@endsection

@section('edit')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    function editCountry(id, color, color_btn) {


        $('#header').css({
            "background-color": color,
            "color": "white"
        });
        $('#btn-bet').css({
            "background-color": color,
            "color": "white",
            "border": "none",
            "display": "inline-block",
            "padding": "10px 23px",
            "border-radius": "10px"
        });

    op=`<a href="javascript:void(0)" class="popup_radio-btn" id="change"
                            style="background-color:${color}!important;color: white;   border: 5px solid  ${color}!important;  background: ${color};
                            background: linear-gradient(270deg, ${color_btn} 49%, ${color} 49%);
                            
                            ">0</a>`

$('#btn_show').html(op);





        $('#change').empty();
    

        $('#color_id').val(id);

    }

</script>
@endsection


@section('delete')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    function addFunction() {
        var first_number = $('#first_number').val();
        var secound_number = $('#secound_number').val();

        secound_number++;

        var result = secound_number * first_number;
        $('#secound_number').val(secound_number);

        $('#add1').html(secound_number);
        $('#result').html(result);
        $('#result1').val(result);

    }

</script>

@endsection

@section('checked')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    function minFunction() {
        var first_number = $('#first_number').val();
        var secound_number = $('#secound_number').val();


        if (parseInt(secound_number) <= 1) {

        } else {
            secound_number--;

            var result = secound_number * first_number;
            $('#secound_number').val(secound_number);

            $('#add1').html(secound_number);
            $('#result').html(result);
        }

    }

</script>

@endsection



@section('add')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    function multiFunction(id) {

        var first_number = $('#first_number').val();
        var secound_number = $('#secound_number').val();

        first_number = id;
        var result = secound_number * first_number;
        $('#first_number').val(first_number);

        $('#result').html(result);
        $('#result1').html(result);

    }

</script>

@endsection



@section('color')
<script>
    document.addEventListener('readystatechange', event => {
        if (event.target.readyState === "complete") {
            var clockdiv = document.getElementsByClassName("clockdiv");
            var countDownDate = new Array();
            for (var i = 0; i < clockdiv.length; i++) {
                countDownDate[i] = new Array();
                countDownDate[i]['el'] = clockdiv[i];
                countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                countDownDate[i]['days'] = 0;
                countDownDate[i]['hours'] = 0;
                countDownDate[i]['seconds'] = 0;
                countDownDate[i]['minutes'] = 0;
            }

            var countdownfunction = setInterval(function () {
                for (var i = 0; i < countDownDate.length; i++) {
                    var now = new Date().getTime();
                    var distance = countDownDate[i]['time'] - now;
                    countDownDate[i]['days'] = Math.floor(distance / (1000 * 60 * 60 * 24));
                    countDownDate[i]['hours'] = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 *
                        60 * 60));
                    countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                        60));
                    countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance < 0) {

                        countDownDate[i]['el'].querySelector('.minutes').innerHTML = 0;
                        countDownDate[i]['el'].querySelector('.seconds').innerHTML = 0;
                    } else {
                        countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[i][
                            'minutes'
                        ];
                        countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[i][
                            'seconds'
                        ];
                    }

                }
            }, 1000);
        }
    });

</script>

@endsection


@section('size')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    setInterval(function () {

        var id = $('#auto_id').val();

        $.get('/time/' + id, function (time) {
            if (time[0] == 0) {
                console.log('hello');
            } else if (time[0] == 1) {
                console.log("fghjk")
                $('#ajax-div').empty();
            } else {
                console.log(time[0]);
                



op=0;
for(i=0; i <time[1].length; i++){

 op +=` <div class="form-group d-flex">
                            <a  onclick="editCountry('${time[1][i].id}','${time[1][i].color_code}','${time[1][i].color_code_2}')" href="#popup1" class="popup_radio-btn" 
                                style="background-color:${time[1][i].color_code}!important;color: white;   border: 5px solid  ${time[1][i].color_code}!important;  background: ${time[1][i].color_code};
                                background: linear-gradient(270deg, ${time[1][i].color_code_2} 49%, ${time[1][i].color_code} 49%);
                                
                                "></a>
                           
                        </div>`                       
}

$('#ajax-div').html(op);
                $('#auto_id').val(time[0].id);

                $('#ajax-div').show();
                $('#time_clock').html(`<div class="clockdiv row" data-date="${time[0].time}">`)


            }
        });

    }, 9000);

</script>
@endsection
