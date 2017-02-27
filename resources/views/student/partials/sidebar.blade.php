<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right visible-xs visible-sm" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="h5 text-white" href="/">
                    <i class="fa fa-graduation-cap text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">tms</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}"><i class="si si-home"></i><span class="sidebar-mini-hide">Trang chủ</span></a>
                    </li>
                    @if (Auth::guest())
                        <li>
                            <a href="/login"><i class="si si-login"></i><span class="sidebar-mini-hide">Đăng nhập</span></a>
                        </li>
                    @endif
                    <li>
                        <a href="/contact" class="{{ Request::is('contact*') ? 'active' : '' }}"><i class="si si-envelope-open"></i><span class="sidebar-mini-hide">Liên lạc</span></a>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span class="sidebar-mini-hide">Khác</span></a>
                        <ul>
                            <li>
                                <a href="/features">Tính năng</a>
                            </li>
                            <li>
                                <a href="/support">Hỗ trợ</a>
                            </li>
                            <li>
                                <a href="/about">Về chúng tôi</a>
                            </li>
                            @if ( Auth::check())
                                <li>
                                    <a href="{{ route('logout') }}">Đăng xuất</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->
