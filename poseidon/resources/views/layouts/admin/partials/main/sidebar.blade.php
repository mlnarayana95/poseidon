<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}" style="height: auto;">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/booking*')) ? 'active' : '' }}" style="height: auto;">
                <a href="{{ route('admin.booking.index') }}">
                    <i class="fa fa-briefcase"></i> <span>Bookings</span>
                </a>
            </li>
            <li class="treeview {{ (request()->is('admin/room*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-key"></i>
                    <span>Rooms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.room.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.room.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview {{ (request()->is('admin/location*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-map"></i>
                    <span>Destinations</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/location"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.location.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/hotel*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span>Hotels</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.hotel.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.hotel.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/amenity*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cutlery"></i>
                    <span>Hotel Amenities</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.amenity.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.amenity.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/feature*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-tv"></i>
                    <span>Room Features</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.feature.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.feature.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>


            <li class="treeview {{ (request()->is('admin/customer*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-black-tie"></i>
                    <span>Customers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.customer.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{route('admin.customer.create')}}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.user.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="{{ route('admin.user.create') }}"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="{{ (request()->is('admin/settings*')) ? 'active' : '' }}">
                <a href="/admin/settings">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                </a>
            </li>
        </ul>
    </section>
</aside>