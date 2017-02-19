<div id="navbar-blue">
    <div class="navbar navbar-ct-blue" role="navigation" style="border-radius: 0px !important; margin-bottom: 0px;">
        <div class="container-fluid">

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-logo" href="/">
                        <div class="logo">
                            <img src="https://s3.amazonaws.com/creativetim_bucket/new_logo.png">
                        </div>
                        <div class="brand"> Hệ thống hỏi đáp trực tuyến UET</div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                                <i class="pe-7s-search"></i>
                                <p>Tìm kiếm</p>
                            </a>
                        </li>

                        @if (Auth::guest())
                            <li>
                                <a href="/login">
                                    <i class="pe-7s-user"></i>
                                    <p>Đăng nhập</p>
                                </a>
                            </li>
                            <li>
                                <a href="/register">
                                    <i class="pe-7s-add-user"></i>
                                    <p>Đăng ký</p>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="/sessions">
                                    <i class="pe-7s-news-paper"></i>
                                    <p>Phiên hỏi đáp</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="pe-7s-mail">
                                        <span class="label">23</span>
                                    </i>
                                    <p>Tin nhắn</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-user"></i>
                                    <p>Tài khoản <b class="caret"></b></p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Đăng xuất</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <form class="navbar-form navbar-right navbar-search-form" role="search">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>

    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->
