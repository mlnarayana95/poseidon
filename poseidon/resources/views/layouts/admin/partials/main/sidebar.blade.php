<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}" style="height: auto;">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview {{ (request()->is('admin/booking*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.booking.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview {{ (request()->is('admin/room*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-key"></i>
                    <span>Rooms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.room.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="treeview {{ (request()->is('admin/destination*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-map"></i>
                    <span>Destinations</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.location.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/hotel*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span>Hotels</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.hotel.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/amenity*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cutlery"></i>
                    <span>Hotel Amenities</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.amenity.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/service*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-tv"></i>
                    <span>Room Features</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.feature.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>


            <li class="treeview {{ (request()->is('admin/customers*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-black-tie"></i>
                    <span>Customers</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.customer.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/chart*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i
                                    class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="pages/charts/morris.html"><i
                                    class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="pages/charts/flot.html"><i
                                    class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="pages/charts/inline.html"><i
                                    class="fa fa-circle-o"></i> Inline
                            charts</a></li>
                </ul>
            </li>

            <li class="treeview {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.user.index') }}"><i
                                    class="fa fa-circle-o"></i> List All</a>
                    </li>
                    <li><a href="pages/layout/boxed.html"><i
                                    class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li class="{{ (request()->is('admin/settings*')) ? 'active' : '' }}">
                <a href="/admin/settings">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>