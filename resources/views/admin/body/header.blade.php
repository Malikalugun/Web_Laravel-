<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="{{asset('logo/logo1.png')}}" width="100px" alt="" class="logo">
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
          
        </ul>
        @php
           $id = Auth::user()->id; 
           $adminData = App\Models\User::find($id);
        @endphp
        <ul class="navbar-nav ml-auto">          
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{(!empty($adminData->profile_image))?url('upload/admin_images/'.$adminData->profile_image):url('upload/no-image.png')}}" width="40px" height="40px" class="img-radius" alt="User-Profile-Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">                        
                            <span>{{$adminData->name}}</span>
                            <a href="{{route('admin.logout')}}" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="{{route('admin.profile')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="{{route('change.password')}}" class="dropdown-item"><i class="fas fa-wallet"></i> Change Password</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    

</header>