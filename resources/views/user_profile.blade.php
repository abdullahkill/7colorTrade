@extends('layout/layout')
@section('content')

<!-- partial:./partials/_sidebar.html -->



@if(isset($show))

<div class="container-fluid ">
    <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="row">
                <div class="col-xs-10 col-lg-6 col-sm-12 col-md-12">
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo profille-logo" href="index.html"><img
                                src="{{asset('upload/user_image/'.$data->profile_photo_path)}}" id="upload-img" alt="logo" /></a>
                    </div>
                </div>
                
            </div>

            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">My profile<div>
                    <small>Please fill the correct information</small>
                </div>
            </h4>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
            </ul>

        </div>
    </nav>
    <div class="global-container">
        <div class="card login-form pro_main_cover">
            <div class="card-body">
                <h4 class="card-title "><b>Profile Information</b></h4>
                <div class="card-text">
                    
                    <form method="post" action="{{route('profile.upgrade')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$data->id}}" name="user_id">
                        <input type="hidden" value="{{$show->id}}" name="user_profiles_id">


                    <div class="row">
                        
                        <div class=" col-lg-6 col-sm-12 col-md-12  form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" value="{{$data->name}}" class="form-control form-control-sm"
                                    placeholder="Enter your Real Name" name="user_name" required>
                            </p>
                        </div>
                        <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Email Address/Phone Number</label>
                                <input type="email" class="form-control form-control-sm"
                                    value="{{$data->email}}" placeholder="Enter your email Adress" disabled
                                    readonly>
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class=" col-lg-6 col-sm-12 col-md-12  form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Mobile Number </label>
                                <input type="number" class="form-control form-control-sm"
                                    placeholder="Enter your mobile number" name="mobile_number" value="{{$show->mobile_number}}" required >
                            </p>
                        </div>
                        <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Whatsapp Number: </label>
                                <input type="number" class="form-control form-control-sm"
                                    placeholder="Please provide whatsapp number" name="whatsapp_number" value="{{$show->whatsapp_number}}" required>
                            </p>
                        </div>
                        

                    </div>
                    <div class="row">
                      <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                        <p class="field--wrapper">
                            <label for="exampleInputEmail1">Profile </label>
                            <input type="file" class="form-control " id="fileupload"
                                placeholder="Please provide whatsapp number" name="pf_photo" >
                        </p>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                      <img src="" alt="" id="profile">
                  </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address</label>
                            <input type="email" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="Enter your email Adress" name="email_address" value="{{$show->email_address}}" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address line 1:</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="1234 main street" name="address1" value="{{$show->address1}}" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address Line 2:</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="Appartment, Studio or floor" name="address2" value="{{$show->address2}}" required>
                        </div>
                    </div>

                        @php
                        $country = DB::table('countries')->get();

                        @endphp
                        <div class="col-xs-10 col-lg-6 col-sm-12 col-md-12 col-xs-offset-1">
                            <p class="field--wrapper">
                                <label for="select-country">Confirm your country</label>
                                <!--   <select id="heard" required="" class="form-control" > -->
                                <select id="select-country" name="country_id" class="demo-default form-control"
                                    required placeholder="Confirm your country" data-parsley-errors-container="#errors">
                                 
                                    @foreach($country as $country)
                                    @if($country->id== $show->country_id )
                                    <option value="{{$country->id}}" selected>{{$country->country_name}}</option>
                                    @else
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>

                                    @endif
                                    @endforeach
                                </select>
                            </p>
                    
                </div>



                <div class="row">
                    <div class=" col-lg-4 col-xs-4 col-sm-12 col-md-12 col-xs-offset-1">
                        
                            <p class="field--wrapper">
                                <label for="select-country">State</label>
                                <!--   <select id="heard" required="" class="form-control" > -->
                                    @php
                        $state = DB::table('states')->where('country_id',$show->country_id)->get();

                        @endphp
                                <select id="select-state" name="state_id" class="demo-default form-control" required
                                    placeholder="Confirm your country" data-parsley-errors-container="#errors">
                                   @foreach($state as $states)
                                    @if($states->id == $show->state_id )
                                    <option value="{{$states->id}}" selected >{{$states->state_name}}</option>
                                    @else
                                    <option value="{{$states->id}}"  >{{$states->state_name}}</option>

                                    @endif

                                    @endforeach
                                </select>
                            </p>
                        
                    </div>
                    
                    <div class=" col-lg-4 col-xs-4 col-sm-12 col-md-12 col-xs-offset-1">
                        
                            <p class="field--wrapper">
                                <label for="select-country">City</label>
                                <input type="text" name="city_name" placeholder="Type your city" value="{{$show->city_name}}" class="form-control form-control-sm" required>
                            </p>
                            
                    </div>
                    
                    <div class=" col-lg-4 col-xs-4 col-xs-offset-1">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Pincode</label>
                                <input type="number" class="form-control form-control-sm" id="exampleInputPassword1"
                                    placeholder="Enter 6 digit pincode" name="pincode" value="{{$show->pincode}}" required>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="my_btn mb-3">Save Changes</button>
        </div>
    </form>
    </div>
</div>


<!-- partial -->

@else
<div class="container-fluid ">
    <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="row">
                <div class="col-xs-10 col-lg-6 col-sm-12 col-md-12">
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo profille-logo" href="index.html"><img
                                src="{{asset('fontend_temp/img/profice-img.png')}}" id="upload-img" alt="logo" /></a>
                    </div>
                </div>
                
            </div>

            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">My profile<div>
                    <small>Please fill the correct information</small>
                </div>
            </h4>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
            </ul>

        </div>
    </nav>
    <div class="global-container">
        <div class="card login-form pro_main_cover">
            <div class="card-body">
                <h4 class="card-title "><b>Profile Information</b></h4>
                <div class="card-text">
                    
                    <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        
                        <div class=" col-lg-6 col-sm-12 col-md-12  form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" value="{{$data->name}}" class="form-control form-control-sm"
                                    placeholder="Enter your Real Name" name="user_name" required>
                            </p>
                        </div>
                        <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Email Address/Phone Number</label>
                                <input type="email" class="form-control form-control-sm"
                                    value="{{$data->email}}" placeholder="Enter your email Adress" disabled
                                    readonly>
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class=" col-lg-6 col-sm-12 col-md-12  form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Mobile Number </label>
                                <input type="number" class="form-control form-control-sm"
                                    placeholder="Enter your mobile number" name="mobile_number" required >
                            </p>
                        </div>
                        <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                            <p class="field--wrapper">
                                <label for="exampleInputEmail1">Whatsapp Number: </label>
                                <input type="number" class="form-control form-control-sm"
                                    placeholder="Please provide whatsapp number" name="whatsapp_number" required>
                            </p>
                        </div>
                        

                    </div>
                    <div class="row">
                      <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                        <p class="field--wrapper">
                            <label for="exampleInputEmail1">Profile </label>
                            <input type="file" class="form-control " id="fileupload"
                                placeholder="Please provide whatsapp number" name="pf_photo" required>
                        </p>
                    </div>
                    <div class=" col-lg-6 col-sm-12 col-md-12 form-group">
                      <img src="" alt="" id="profile">
                  </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address</label>
                            <input type="email" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="Enter your email Adress" name="email_address" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address line 1:</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="1234 main street" name="address1" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address Line 2:</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputPassword1"
                                placeholder="Appartment, Studio or floor" name="address2" required>
                        </div>
                    </div>

                        @php
                        $country = DB::table('countries')->get();

                        @endphp
                        <div class="col-xs-10 col-lg-6 col-sm-12 col-md-12 col-xs-offset-1">
                            <p class="field--wrapper">
                                <label for="select-country">Confirm your country</label>
                                <!--   <select id="heard" required="" class="form-control" > -->
                                <select id="select-country" name="country_id" class="demo-default form-control"
                                    required placeholder="Confirm your country" data-parsley-errors-container="#errors">
                                    <option value="" disabled selected>Select your country</option>
                                    @foreach($country as $country)
                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </p>
                    
                </div>



                <div class="row">
                    <div class=" col-lg-4 col-xs-4 col-sm-12 col-md-12 col-xs-offset-1">
                        
                            <p class="field--wrapper">
                                <label for="select-country">State</label>
                                <!--   <select id="heard" required="" class="form-control" > -->
                                <select id="select-state" name="state_id" class="demo-default form-control" required
                                    placeholder="Confirm your country" data-parsley-errors-container="#errors">
                                    <option value="" selected disable>Select state</option>

                                </select>
                            </p>
                        
                    </div>
                    
                    <div class=" col-lg-4 col-xs-4 col-sm-12 col-md-12 col-xs-offset-1">
                        
                            <p class="field--wrapper">
                                <label for="select-country">City</label>
                                <input type="text" name="city_name" placeholder="Type your city" class="form-control form-control-sm" required>
                            </p>
                            
                    </div>
                    
                    <div class=" col-lg-4 col-xs-4 col-xs-offset-1">
                        <div class="form-group">
                                <label for="exampleInputPassword1">Pincode</label>
                                <input type="number" class="form-control form-control-sm" id="exampleInputPassword1"
                                    placeholder="Enter 6 digit pincode" name="pincode" required>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="my_btn mb-3">Save Changes</button>
        </div>
    </form>
    </div>
</div>

@endif
<!-- ****************Dashbord End******************** -->

@endsection




<!-- **************************************************Change state Start ******************************** -->



<!-- ************************************************** Jquery Start ******************************** -->


@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        $(document).on('change', '#select-country', function () {
            var id = $(this).val();

            //console.log('hello');
            var div = $(this).parent();
            var op = "";
            $.get('/profile/state/' + id, function (data) {
                op += `<option value="" selected disable>Select state</option>`;

                for (i = 0; i < data[0].length; i++) {

                    op += '<option value="' + data[0][i].id + '">' + data[0][i].state_name +
                        '</option>';

                }

                $('#select-state').html(op);
            });

        });

    });

</script>
@endsection
<!-- ************************************************** Change State End ******************************** -->





@section('add')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function(){
    $("#fileupload").change(function(event) {
		console.log("hi");
      var x = URL.createObjectURL(event.target.files[0]);
      $("#upload-img").attr("src",x);
      $("#profile").attr("src",x);
      $("#profile").css({"height":"150px","width":"150px"});
      
      console.log(event);
    });
  })
  </script>


@endsection





























<!-- ************************************************** Jquery End ******************************** -->
