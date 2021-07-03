<div class="sidebar sidebar-offcanvas" id="sidebar" style="padding: 20px; ">
	<div class="site_brand sidebar_logo sidebar-category text-center ">
	  <img src="{{asset('fontend_temp/img/logo.png')}}">
	  <hr>
	</div>
	
	   <!-- Accordian Menu -->

	   <div class="accordion" id="accordionExample">
		{{-- <div class="card">
		  <div class="card-header">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
				  
				<i class="menu_icon fa fas fa-columns"></i>
				<span>Dashboard</span>   
				<span class="angle_accordian">
					<i class="dropdown_icon fa fa-angle-down" aria-hidden="true"></i>
				  </span>              
			  </a>
			</div>      
			  
		  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
			  <ul class="accordian__menu">
				<li><a href="#">Personal Data</a></li>
				<li><a href="#">Bank Details</a></li>
				<li><a href="#">Downline Info</a></li>
			  </ul>
			</div>
		  </div>
		  
		</div> --}}

		<div class="card">
			<div class="card-header" id="headingOne">     
				<a class="btn btn-link btn-block text-left open" type="button" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseTwo">
				  <img  src="{{asset('7colorTreadImg/group9224.png')}}" style="width:13px;" >
				  <span class="menu_text" style="padding-left:7px">Dashborad</span>
				  <span class="angle_accordian">
					<i class="dropdown_icon fa fa-angle-down" aria-hidden="true"></i>
				  </span>
				</a>      
			</div>
  
			<div id="collapseOne" class="collapse {{ (request()->is('play/game')) ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">
			  <div class="card-body">
				<ul class="accordian__menu">
				  <li><a href="/play/game" > <img  src="{{asset('7colorTreadImg/group9225.png')}}" style="width:13px;">	PLay</a></li>
				  <li><a href="#"><img  src="{{asset('7colorTreadImg/group9226.png')}}" style="width:13px;">    Wallet</a></li>
				  <li><a href="#"><img  src="{{asset('7colorTreadImg/group9229.png')}}" style="width:13px;"> Recharge</a></li>
				  
				  <li><a href="#"><img  src="{{asset('7colorTreadImg/group9229.png')}}" style="width:13px;"> ALL Orders</a></li>
				</ul>
			  </div>
			</div>
		  </div>




		 <div class="card">
		  <div class="card-header" id="headingTwo">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<img  src="{{asset('7colorTreadImg/group9253	.png')}}" style="width:13px;" > 
				<span class="menu_text" style="padding-left:7px">Settings</span>
				<span class="angle_accordian">
				  <i class="dropdown_icon fa fa-angle-down" aria-hidden="true"></i>
				</span>
			  </a>      
		  </div>

		  <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
			  <ul class="accordian__menu">
				<li><a href="#"> <img  src="{{asset('7colorTreadImg/group9239.png')}}" style="width:13px;" >  Personal Data</a></li>
				<li><a href="#"><img  src="{{asset('7colorTreadImg/group9241.png')}}" style="width:13px;" >  Bank Details</a></li>
				<li><a href="#"><img  src="{{asset('7colorTreadImg/group9243.png')}}" style="width:13px;" >  Downline Info</a></li>
			  </ul>
			</div>
		  </div>
		</div>

		 <div class="card">
		  <div class="card-header" id="headingThree">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
				<img  src="{{asset('7colorTreadImg/group9226.png')}}" style="width:13px;" >
				<span class="menu_text" style="padding-left:7px" >Finances</span>
				<span class="angle_accordian">
				  <i class="dropdown_icon fa fa-angle-down" aria-hidden="true"></i>
				</span>
			  </a>      
		  </div>

		  <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
			  <ul class="accordian__menu">
				<li><a href="#"><img  src="{{asset('7colorTreadImg/group9245.png')}}" style="width:13px;" >  Deposite/withdraw</a></li>
				<li><a href="#"><img  src="{{asset('7colorTreadImg/group9247.png')}}" style="width:13px;" >  Payment History</a></li>

			  </ul>
			</div>
		  </div>
		</div>

		<div class="card">
		  <div class="card-header">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
				<img  src="{{asset('7colorTreadImg/group9233.png')}}" style="width:13px;" >
				<span style="padding-left:7px">Bonus Reward</span>                 
			  </a>      
		  </div>
		</div>

		<div class="card">
			<div class="card-header">      
				<a href="{{route('show.notification')}}" class="btn btn-link btn-block text-left" type="button"  >
					<i class="fa fa-bell-o" aria-hidden="true"></i>
				  <span style="padding-left:7px">Notification    
					<span style="font-weight: bold; margin-left:20px;">{{auth()->user()->unreadNotifications->count()}}</span>
				</span>                 
				</a>      
			</div>
		  </div>

		  
		<div class="card">
		  <div class="card-header">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
				<img  src="{{asset('7colorTreadImg/group9235.png')}}" style="width:13px;" >
				<span style="padding-left:7px">App Download</span>                 
			  </a>      
		  </div>
		</div>

		<div class="card">
		  <div class="card-header">      
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne">
				<i class="menu_icon fa fa-life-ring" aria-hidden="true"></i>
				<span>Player Support</span>                 
			  </a>      
		  </div>
		</div>
		
		
		<div class="card last_menu" style="padding-top:50px;">
		  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
			<div class="card-body">
			  <ul class="accordian__menu">
				@php
				$id= Auth::user()->id;
							  $adminData = DB::table('users')->find($id);
						  
							  @endphp
				<li><a href="/profile/{{$adminData->id}}"><img  src="{{asset('7colorTreadImg/Group 9250.png')}}" style="width:13px;" > My Profile</a></li>
				
				<li>
				  
				  
				  <form method="POST" action="{{ route('logout') }}">
					@csrf
				  <a href="{{ route('logout') }}" onclick="event.preventDefault();  this.closest('form').submit();"><img  src="{{asset('7colorTreadImg/group9251.png')}}" style="width:13px;" >  logout</a></li>
				  </form>
				</ul>
			</div>
		  </div>
		   <div class="card-header" id="headingFive" style="padding-bottom:80px;">
			  <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
				
				<img src="{{ (!empty($adminData->profile_photo_path))?
				  url('upload/user_image/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" style="height:25px" />
				<span class="menu_text" style="margin-left:5px;">{{ Auth::user()->name }}</span>
				<span class="angle_accordian">
				  <i class="up_icon dropdown_icon fa fa-angle-up" aria-hidden="true"></i>
				  <i class="dropdown_icon fa fa-angle-down" aria-hidden="true"></i>
				</span>
			  </a>
		  </div>
		</div>

		
		
	</div>
  </div> 
