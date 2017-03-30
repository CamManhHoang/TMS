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
            <li class="{{ Request::is('topic-registration') ? 'active' : '' }}">
                <a href="/topic-registration">
                    <i class="fa fa-briefcase push-5-r"></i>Đăng ký đề tài
                </a>
            </li>
            <li class="{{ Request::is('topic-modification') ? 'active' : '' }}">
                <a href="/topic-modification">
                    <i class="fa fa-book push-5-r"></i>Sửa đổi đề tài
                </a>
            </li>
            <li class="{{ Request::is('my-topic') ? 'active' : '' }}">
                <a href="/my-topic">
                    <i class="fa fa-bell"></i> Trạng thái đề tài
                </a>
            </li>
            <li class="{{ Request::is('settings') ? 'active' : '' }}">
                <a href="/settings">
                    <i class="fa fa-cog push-5-r"></i>Cài đặt
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END Sub Header -->
