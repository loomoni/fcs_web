<header class="app-header"><a class="app-header__logo" href="">F C S</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">

        <!--Notification Menu-->
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <!-- <li><a class="dropdown-item" href="{{url('update_password')}}"><i class="fa fa-cog fa-lg"></i>Password</a></li> -->
                <li><a class="dropdown-item" href="{{url('edit_profile')}}"><i class="fa fa-user fa-lg"></i>Profile</a></li>
                <li><a class="dropdown-item" href="{{ url('logout') }}"> <i class="fa fa-sign-out fa-lg"></i> Logout</a>
                      
                       {{-- onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a> --}}
                                                     
                    {{-- <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
                </li>

            </ul>
        </li>
    </ul>
</header>
