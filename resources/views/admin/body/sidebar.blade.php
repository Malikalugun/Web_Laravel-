<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >           
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Dashboard</label>
                </li>             
                
                    <li class="nav-item">                   
                    <a href="{{route('all.data')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Data Forms</span></a>
                    </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Home</label>   
                </li>  
                <li class="nav-item">
                    <a href="{{route('home.side')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>  
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">About</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('about.page')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">About</span></a></li>
                        <li><a href="{{route('about.multi.logo')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span >Multi logo</span></a></li>
                        <li><a href="{{route('all.multi.image')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span >All Multi Image</span></a></li>
                    
                    </ul>
                </li>  
              
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext"> Blog</span></a>
                    <ul class="pcoded-submenu">
                        <a href="{{route('all.blog')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext"> All Blog</span></a>
                        <a href="{{route('all.category')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-circle"></i></span><span class="pcoded-mtext"> Category</span></a>
                    </ul>
                </li> 

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Footer Page Setup</span></a>
                    <ul class="pcoded-submenu">
                        <a href="{{route('footer.setup')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext"> Footer Setup</span></a>
                        {{-- <a href="{{route('all.category')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-circle"></i></span><span class="pcoded-mtext"> Category</span></a> --}}
                    </ul>
                </li> 
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Contact Page Setup</span></a>
                    <ul class="pcoded-submenu">
                        <a href="{{route('contact.message')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext"> Contact Message</span></a>
                        {{-- <a href="{{route('all.category')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-circle"></i></span><span class="pcoded-mtext"> Category</span></a> --}}
                    </ul>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Galllery Page Setup</span></a>
                        <ul class="pcoded-submenu">
                            <a href="{{route('gallery.setup')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Gallery</span></a>
                            {{-- <a href="{{route('all.category')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-circle"></i></span><span class="pcoded-mtext"> Category</span></a> --}}
                        </ul>
                    </li> 
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Testimonial Page Setup</span></a>
                        <ul class="pcoded-submenu">
                            <a href="{{route('testimonial.setup')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Testimonail</span></a>
                            {{-- <a href="{{route('all.category')}}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-circle"></i></span><span class="pcoded-mtext"> Category</span></a> --}}
                        </ul>
                    </li> 
                </li> 
                </ul>
            </div>
    </div>
</nav>