<!-- fixed navigation -->

    <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="images/venmar.jpg" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>Venmar Vicente<br><small>Admin</small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        
                        <li class="{{ Request::is('Dashboard') ? 'active' : ''}}"><a href="{{ URL::to( 'Dashboard') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
                        <li class="droplink {{ Request::is('Province', 'Cities' , 'tags' , 'Destinations') ? 'active open' : ''}}"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-wrench"></span><p>Maintenance</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li  class="{{ Request::is('Province') ? 'active' : ''}}"><a href="/Province">Provinces</a></li>
                                <li  class="{{ Request::is('Cities') ? 'active' : ''}}"><a href="/Cities">Cities</a></li>
                                <li class="{{ Request::is('Tags') ? 'active' : ''}}" ><a href="/Tags">Tags</a></li>
                                <li class="{{ Request::is('Destinations') ? 'active' : ''}}"><a href="/Destinations">Destinations</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-book"></span><p>Pages</p><span class="arrow"></span></a>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon fa fa-binoculars"></span><p>Tourist spots</p><span class="arrow"></span></a>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-map"></span><p>Maps</p><span class="arrow"></span></a>
                        </li>

                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

<!-- /fixed navigation -->