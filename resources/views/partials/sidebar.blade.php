<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">
    {{-- <div class="app-sidebar__user"><img width="40 px" class="app-sidebar__user-avatar" src="{{ url('/images/user/{{Auth::user()->admin }}') }}" alt="User Image"> --}}
    <div class="app-sidebar__user"><img width="40 px" class="app-sidebar__user-avatar" src="{{ url('/images/user/admin-icn.png') }}" alt="User Image">

        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->fullname }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item {{ request()->is('/dashboard') ? 'active' : ''}}" href="/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        
        <li class="treeview"><a class="app-menu__item {{ request()->is('slider') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">sliders</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('slider/create') }}"><i class="icon fa fa-plus"></i> Add sliders</a></li>
                <li><a class="treeview-item" href="{{ url('sliders') }}"><i class="icon fa fa-edit"></i> Manage sliders</a></li>
             </ul>
        </li>

        <li class="treeview "><a class="app-menu__item {{ request()->is('about-us*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-sitemap"></i><span class="app-menu__label">About Us</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item " href="{{ url('about-us/create') }}"><i class="icon fa fa-plus"></i>Create</a></li>
                <li><a class="treeview-item" href="{{ url('about-us') }}"><i class="icon fa fa-edit"></i>Manage</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item {{ request()->is('values*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-low-vision"></i><span class="app-menu__label">Core Values</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('values/create')}}"><i class="icon fa fa-plus"></i> Add Values</a></li>
                <li><a class="treeview-item" href="{{url('values')}}"><i class="icon fa fa-edit"></i> Manage Values</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item {{ request()->is('blog*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cube"></i><span class="app-menu__label">Blogs</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('blog/create')}}"><i class="icon fa fa-plus"></i> New Blog</a></li>
                <li><a class="treeview-item" href="{{url('blog')}}"><i class="icon fa fa-edit"></i> Manage Blog</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->is('faq*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-low-vision"></i><span class="app-menu__label">FAQ</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('faq/create')}}"><i class="icon fa fa-plus"></i> Add FAQ</a></li>
                <li><a class="treeview-item" href="{{url('faq')}}"><i class="icon fa fa-edit"></i> Manage FAQ</a></li>
            </ul>
        </li>

        <li class="treeview "><a class="app-menu__item {{ request()->is('team*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Team</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item " href="{{url('team/create')}}"><i class="icon fa fa-plus"></i>Create Team </a></li>
                <li><a class="treeview-item" href="{{url('team')}}"><i class="icon fa fa-edit"></i>Manage Team</a></li>
            </ul>
        </li>
        
        <li class="treeview"><a class="app-menu__item {{ request()->is('contacts*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-phone-square"></i><span class="app-menu__label">Contact information</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('contacts/create')}}"><i class="icon fa fa-plus"></i> Add Contacts</a></li>
                <li><a class="treeview-item" href="{{url('contacts')}}"><i class="icon fa fa-edit"></i> Manage Contacts</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item {{ request()->is('our-client*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-handshake-o"></i><span class="app-menu__label">Our Client</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{url('our-client/create')}}"><i class="icon fa fa-plus"></i> Add Client</a></li>
                <li><a class="treeview-item" href="{{url('our-client')}}"><i class="icon fa fa-edit"></i> Manage Client</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item {{ request()->is('grants*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Grants</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('grants/create' )}}"><i class="icon fa fa-circle-o"></i> Add Customer</a></li>
                <li><a class="treeview-item" href="{{ url('grants') }}"><i class="icon fa fa-circle-o"></i> Manage Customer</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item {{ request()->is('customer*') ? 'active' : ''}}" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">System Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('customer/create' )}}"><i class="icon fa fa-circle-o"></i> Add Customer</a></li>
                <li><a class="treeview-item" href="{{ url('customer') }}"><i class="icon fa fa-circle-o"></i> Manage Customer</a></li>
            </ul>
        </li>

    </ul>
</aside>
