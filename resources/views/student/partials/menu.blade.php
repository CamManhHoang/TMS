<!-- Sub Header -->
<div class="bg-gray-lighter visible-xs">
    <div class="content-mini content-boxed">
        <button class="btn btn-block btn-default visible-xs push" data-toggle="collapse" data-target="#sub-header-nav">
            <i class="fa fa-navicon push-5-r"></i>Menu
        </button>
    </div>
</div>
<div class="bg-primary-lighter collapse navbar-collapse remove-padding" id="sub-header-nav">
    <div class="content-mini content-boxed">
        <ul class="nav nav-pills nav-sub-header push">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="/home">
                    <i class="fa fa-university push-5-r"></i>Trang tổng quan
                </a>
            </li>
            <li class="{{ Request::is('teachers-info') ? 'active' : '' }}">
                <a href="/teachers-info">
                    <i class="fa fa-users push-5-r"></i>Thông tin giảng viên
                </a>
            </li>
            <li class="{{ Request::is('register-status') ? 'active' : '' }}">
                <a href="/register-status">
                    <i class="fa fa-book push-5-r"></i>Trạng thái đăng ký
                </a>
            </li>
            <li class="{{ Request::is('my-topic') ? 'active' : '' }}">
                <a href="/my-topic">
                    <i class="fa fa-bell"></i> Trạng thái đề tài
                </a>
            </li>
            <li class="{{ Request::is('edit-student-info') ? 'active' : '' }}">
                <a href="/edit-student-info">
                    <i class="fa fa-cog push-5-r"></i>Cập nhật thông tin
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END Sub Header -->
