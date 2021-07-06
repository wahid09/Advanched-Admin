

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
                                    <a class="nav-link" href="<?php echo e(route('app.dashboard')); ?>">
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
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'role-index')): ?>
                                        <li>
                                            <a class="nav-link" href="<?php echo e(route('app.roles.index')); ?>">
                                                <i class="fa fa-copy" aria-hidden="true"></i><span>Role Management</span>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'permission-access')): ?>
                                        <li>
                                            <a class="nav-link" href="<?php echo e(route('app.permissions.index')); ?>">
                                                Permissions
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'module-access')): ?>
                                        <li>
                                            <a class="nav-link" href="<?php echo e(route('app.modules.index')); ?>">
                                                Modules 
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'user-index')): ?>
                                        <li>
                                            <a class="nav-link" href="<?php echo e(route('app.users.index')); ?>">
                                                User Management
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-sliders" aria-hidden="true"></i>
                                        <span>System</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'backup-index')): ?>
                                        <li>
                                            <a class="nav-link" href="<?php echo e(route('app.backups.index')); ?>">
                                                Sliders
                                            </a>
                                        </li>
                                        <?php endif; ?>
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
            <!-- end: sidebar --><?php /**PATH C:\laragon\www\advanchedqadmin\resources\views/layouts/backend/partials/sidebar.blade.php ENDPATH**/ ?>