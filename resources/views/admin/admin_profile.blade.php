@extends('admin/layout/layout')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>User Profile</h2>
							<div class="right-wrapper text-right" style="margin-right:50px">
							<ol class="breadcrumbs">

								<li>
									<a href="/admin/dashboard">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Admin Profile</span></li>

							</ol>
					
							{{-- <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a> --}}
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-lg-5 col-xl-4 mb-5 mb-xl-0">
						@if(Session::get('error_image'))
    <div class="alert alert-danger">
        {{Session::get('error_image')}}

</div>
@endif



@if(Session::get('success_image'))
    <div class="alert alert-success">
        {{Session::get('success_image')}}

</div>
@endif
							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="{{ (!empty($adminData->profile_photo_path))?
                         url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" class="rounded img-fluid" id="upload-img" alt="John Doe" style="height:300px">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">{{$adminData->name}}</span>
											<span class="thumb-info-type">Admin</span>
										</div>
									</div>

									<form method="post" action="{{route ('image.update') }}" enctype="multipart/form-data">
									@csrf
									<input type="file" name="pf_photo" id="fileupload" ></br></br>
									<input type="submit" class="btn btn-primary" value="Update image">

									</form>


								</div>
							</section>




						</div>
						<div class="col-lg-8 col-xl-6">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#overview" data-toggle="tab">Edit</a>
									</li>
									<li class="nav-item">
									
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
							<form method="post" action="{{route('update.username')}}">
							@csrf
							@if(Session::get('userName'))
    <div class="alert alert-success">
        {{Session::get('userName')}}

</div>
@endif

									<div class="row">
												<div class="col-md-4">
													<p> Edit Username </p>
										</div>
										<div class="col-md-5">
													<p> <input type="text" name="name" class="form-control" value="{{$adminData->name}}"> </p>
										</div>
										<div class="col-md-3">
													<button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-edit"></i>Edit</button>
										</div>
										</form>
											</div>
											<div class="row">
												<div class="col-md-4">
													<p> Email </p>
													
											</div>
											<div class="col-md-5">
													<p> {{$adminData->email}} </p>
										</div>

											</div>







      <form method="post" action="{{route('change.password')}}" >
        @csrf
									</div>

											<hr class="dotted tall">

											<h4 class="mb-3">Change Password</h4>
											<div class="form-row">
												<div class="col-md-12">
											<div class="form-group row">
													<label for="inputPassword" class="col-md-5">Old Password</label>
													<input type="password" name="old_password" class="form-control col-md-5" id="inputPassword6" required placeholder="Password">
													
@if(Session::get('password'))
    <div class="alert alert-danger">
        {{Session::get('password')}}

</div>
@endif
												</div>
										</div>
								
												<div class="form-group col-md-12">
													<label for="inputPassword4">New Password</label>
													<input type="password" class="form-control" name="new_password" id="inputPassword4" placeholder="Password" required>
												</div>
												<span id="message"> </span>
												<div class="form-group col-md-12">
													<label for="inputPassword5">Re New Password</label>
													<input type="password" class="form-control" id="inputPassword5" placeholder="Password" required>
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button type="submit" id="submit" class="btn btn-primary modal-confirm">Save</button>
												</div>
											</div>

										</form>


									</div>
									<div id="edit" class="tab-pane">

									
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- end: page -->
				</section>
@endSection



@section('add')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function(){
    $("#fileupload").change(function(event) {
		console.log("hi");
      var x = URL.createObjectURL(event.target.files[0]);
      $("#upload-img").attr("src",x);
      console.log(event);
    });
  })
  </script>


@endsection


@section('edit')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('#inputPassword4, #inputPassword5').on('keyup', function () {
  if ($('#inputPassword4').val() == $('#inputPassword5').val()) {

    $('#message').html('Matching').css({'color': 'green'});
    document.getElementById("submit").disabled = false;
  } else{ 
  
    document.getElementById("submit").disabled = true;
    $('#message').html('Not Matching').css({'color': 'red'});
  }
});
</script>
@endSection


