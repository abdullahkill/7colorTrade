<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="/admin/dashboard">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>                        
				                    </li>

									<li>
				                        <a class="nav-link" href="{{route('admin.state')}}">
				                            <i class="fas fa-flag" aria-hidden="true"></i>
				                            <span>States</span>
				                        </a>                        
				                    </li>
									{{-- <li>
				                         <a class="nav-link" href="{{route('admin.city')}}"> 
				                            <i class="fas fa-flag" aria-hidden="true"></i>
				                            <span>City</span>
				                        </a>                        
				                    </li> --}}


									<li>
				                        <a class="nav-link" href="{{route('admin.betting')}}">
				                            <i class="fas fa-list"></i>
				                            <span>Seven Color Betting</span>
				                        </a>                        
				                    </li>
									<li>
				                        <a class="nav-link" href="{{route('admin.betting.view')}}">
				                            <i class="fas fa-list"></i>
				                            <span>View Seven Color Betting</span>
				                        </a>                        
				                    </li>
				                   
				                   
				                   
				                  
				                    
				                  
				                  
				                    
				                  
				
				                </ul>
				            </nav>
				
				            <hr class="separator" />
				
				
				            <hr class="separator" />
				
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>