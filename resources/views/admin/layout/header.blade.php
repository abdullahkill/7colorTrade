<header class="header">
				<div class="logo-container">
					<a href="/admin/dashboard" class="logo">
						<img src="{{asset('backend/img/logo.png')}}" width="55" height="45" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group">
							
						</div>
					</form>
			
					<span class="separator"></span>
			
					
			
					<span class="separator"></span>
					@php
$adminData = DB::table('admins')->first();
@endphp
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{ (!empty($adminData->profile_photo_path))?
                         url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{$adminData->name}}</span>
								<span class="role">Administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{route('admin.profile')}}"><i class="fas fa-user"></i> My Profile</a>
								</li>
							
								<li>
									<a role="menuitem" tabindex="-1" href="{{route('admin.logout')}}"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>

    