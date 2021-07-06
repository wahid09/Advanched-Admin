{{-- <style>
    .vertical-nav-menu ul>li>a {
    color: #6c757d;
    height: 2rem;
    line-height: 2rem;
    padding: 0 1.5rem 0;
    text-transform: lowercase;
    font-size:16px;
}
</style>
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
            </span>
        </div>    
    <div class="scrollbar-sidebar">
        <!-- Dropdown list-->
        <ul class="vertical-nav-menu">
            <br>
            <li class="app-sidebar__heading"><a href="{{ route('app.dashboard') }}" class="{{ Route::is('app.dashboard') ? 'mm-active' : ''}}"><i class="metismenu-icon pe-7s-rocket"></i>Dashboard
            </a>
            </li>
            <li class="app-sidebar__heading">
              <a href="#"><i class="metismenu-icon pe-7s-settings"></i>Access Control<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
              </a>
                <ul>
                    @permission('role-index')
                    <li class="{{Request::is('app/roles*') ? 'mm-active' : ''}}">
                    <a href="{{ route('app.roles.index') }}">
                    <i class="metismenu-icon pe-7s-check"></i>Role Management
                    </a>
                    </li>
                    @endpermission
                    @permission('permission-access')
                    <li class="{{ Request::is('app/permissions*') ? 'mm-active' : ''}}">
                    <a href="{{ route('app.permissions.index') }}">
                    <i class="metismenu-icon pe-7s-cloud"></i>Permissions
                    </a>
                    </li>
                    @endpermission
                    
                    @permission('module-access')
                    <li class="{{ Request::is('app/modules*') ? 'mm-active' : ''}}">
                    <a href="{{ route('app.modules.index') }}">
                    <i class="metismenu-icon pe-7s-cloud"></i>Modules
                    </a>
                    </li>
                    @endpermission

                    @permission('user-index')
                    <li class="{{ Request::is('app/users*') ? 'mm-active' : ''}}">
                    <a href="{{ route('app.users.index') }}">
                    <i class="metismenu-icon pe-7s-users"></i>User Management
                    </a>
                    </li>
                    @endpermission
                                    
                </ul>
            </li>

            <li class="app-sidebar__heading">
              <a href="#"><i class="metismenu-icon pe-7s-diamond"></i>System<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
              </a>
                <ul>
                    @permission('backup-index')
                    <li class="{{Request::is('app/backups*') ? 'mm-active' : ''}}">
                    <a href="{{ route('app.backups.index') }}" class="">
                    <i class="metismenu-icon pe-7s-cloud"></i>Backups
                    </a>
                    </li>
                    @endpermission
                </ul>
            </li>

            <li class="app-sidebar__heading">
              <a href="#"><i class="metismenu-icon pe-7s-tools"></i>Application Setup<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
              </a>
                <ul>
                    
                    <li>
                    <a href="" class="">
                    <i class="metismenu-icon pe-7s-cloud"></i>Page
                    </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- End Dropdown-->   
    </div>
    <!-- Example -->
    <!-- End -->
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){

      var url = window.location.href;

      var encodedString = btoa(url);
      encodedString=encodedString.replace("==","");
      encodedString=encodedString.replace("=","");

      $activeUrl=$("#"+encodedString);
      //alert($activeUrl);
      $activeUrl.addClass("mm-active");

      $activeLi=$activeUrl.parents("li.customLiClass:first");
      $activeLi.addClass("mm-active");
    });

</script> --}}

<!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
								<li class="nav-active">
                                    <a class="nav-link" href="{{ route('app.dashboard') }}">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>                                                       
                                
                                <li>
                                    <a class="nav-link" href="menu.html">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                        <span>Menus</span>
                                    </a>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Access Control</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        @permission('role-index')
                                        <li>
                                            <a class="nav-link" href="{{ route('app.roles.index') }}">
                                                <i class="fa fa-copy" aria-hidden="true"></i><span>Role Management</span>
                                            </a>
                                        </li>
                                        @endpermission
                                        @permission('permission-access')
                                        <li>
                                            <a class="nav-link" href="{{ route('app.permissions.index') }}">
                                                Permissions
                                            </a>
                                        </li>
                                        @endpermission
                                        @permission('module-access')
                                        <li>
                                            <a class="nav-link" href="{{ route('app.modules.index') }}">
                                                Modules 
                                            </a>
                                        </li>
                                        @endpermission
                                        @permission('user-index')
                                        <li>
                                            <a class="nav-link" href="{{ route('app.users.index') }}">
                                                User Management
                                            </a>
                                        </li>
                                        @endpermission
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-sliders" aria-hidden="true"></i>
                                        <span>System</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        @permission('backup-index')
                                        <li>
                                            <a class="nav-link" href="{{ route('app.backups.index') }}">
                                                Sliders
                                            </a>
                                        </li>
                                        @endpermission
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-universal-access" aria-hidden="true"></i>
                                        <span>Application Setup</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="urlgroup.html">
                                                Url Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="url.html">
                                                Urls
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="role.html">
                                                Roles
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                

                                <li>
                                    <a class="nav-link" href="setting.html">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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
            <!-- end: sidebar -->