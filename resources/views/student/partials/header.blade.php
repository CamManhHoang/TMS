<header id="header-navbar">
    <div class="content-mini content-mini-full content-boxed">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <li class="js-header-search header-search remove-margin">
                <form class="form-horizontal" action="" method="post">
                    <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                        <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </li>
            @if(Auth::check())
                <li>
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default btn-image" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                        <img src="assets/img/avatars/avatar9.jpg" alt="Avatar">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </li>
            @endif
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="header-content">
                <a class="h5" href="/">
                    <i class="fa fa-graduation-cap text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">tms</span>
                </a>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </div>
</header>
