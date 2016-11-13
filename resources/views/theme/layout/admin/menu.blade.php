<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            {{-- <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
            </div> --}}
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->user_name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{route("admin.get_profile")}}"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{route("admin.change_password")}}"><i class="material-icons">lock_outline</i>Change Password</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{route("admin.get_logout")}}"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li
                @if($titleName == 'Dashboard')
                    class="active"
                @endif>
                    <a href="{{ route('admin.get_home') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li
                @if($titleName == 'User Management' || $titleName == 'Add User' || $titleName == 'View User')
                    class="active"
                @endif>
                    <a href="{{ url('admin/user') }}">
                        <i class="material-icons">people</i>
                        <span>User Management</span>
                    </a>
                </li>
                <li
                @if($titleName == 'Add Asset' || $titleName == 'Asset Management' || $titleName == 'View Asset')
                    class="active"
                @endif>
                    <a href="{{ url('admin/asset') }}">
                        <i class="material-icons">devices_other</i>
                        <span>Asset Management</span>
                    </a>
                </li>
                <li
                @if($titleName == 'Request Management' || $titleName == 'View Request')
                    class="active"
                @endif>
                    <a href="{{ url('admin/request') }}">
                        <i class="material-icons">layers</i>
                        <span>Request Management</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">build</i>
                        <span>Service Management</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('admin/service/create') }}">
                                <i class="material-icons">local_phone</i>
                                <span>Request Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.service') }}">
                                <i class="material-icons">settings_input_antenna</i>
                                <span>Manage Service</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; <?php echo date("Y"); ?>
                 <a href="{{ route('admin.get_home') }}">IAMS</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    {{-- <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar --> --}}
</section>