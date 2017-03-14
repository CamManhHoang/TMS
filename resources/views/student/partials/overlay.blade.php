<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="side-header side-content">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
            <span class="font-w600">{{ Auth::user()->student->full_name}}</span>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="side-content remove-padding-t">
            <!-- Account -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Tài khoản</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal" action="" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label>Username</label>
                                <div class="form-control-static font-w700">{{ Auth::user()->username }}</div>
                            </div>
                            <div class="col-xs-6">
                                <label>Mã số sinh viên</label>
                                <div class="form-control-static font-w700">{{ Auth::user()->student->student_id }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <a class="btn btn-sm btn-minw btn-rounded btn-primary" href="{{ route('logout') }}">
                                    <i class="fa fa-sign-out"></i> Đăng Xuất
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="bd-qsettings-name">Họ và Tên</label>
                                <input class="form-control" type="text" id="bd-qsettings-name" name="full_name" placeholder="Enter your name.." value="{{ Auth::user()->student->full_name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="bd-qsettings-email">Email</label>
                                <input class="form-control" type="email" id="bd-qsettings-email" name="email" placeholder="Enter your email.." value="{{ Auth::user()->student->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="bd-qsettings-password">Mật Khẩu Mới</label>
                                <input class="form-control" type="password" id="bd-qsettings-password" name="password" placeholder="Enter a new password..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="bd-qsettings-password2">Xác Nhận Mật Khẩu Mới</label>
                                <input class="form-control" type="password" id="bd-qsettings-password2" name="password-confirmation" placeholder="Confirm your new password..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-minw btn-rounded btn-primary" type="submit">
                                    <i class="fa fa-check push-5-r"></i>Cập Nhật
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Account -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
