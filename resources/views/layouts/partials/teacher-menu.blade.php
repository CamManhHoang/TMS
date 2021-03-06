<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực cá nhân</span></li>
<li>
    <a class="{{ Request::is('teacher-info') ? 'active' : '' }}" href="/teacher-info">
        <i class="si si-badge"></i>
        <span class="sidebar-mini-hide">Thông tin giảng viên</span>
    </a>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực quản trị</span></li>
<li>
    <a class="{{ Request::is('student-topics') ? 'active' : '' }}" href="/student-topics">
        <i class="fa fa-list-ol"></i>
        <span class="sidebar-mini-hide">Sinh viên tham gia</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('students-register') ? 'active' : '' }}" href="/students-register">
        <i class="fa fa-list-alt"></i>
        <span class="sidebar-mini-hide">Sinh viên đăng ký</span>
    </a>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Cài đặt</span></li>
<li>
    <a class="{{ Request::is('edit-profile') ? 'active' : '' }}" href="/edit-profile">
        <i class="fa fa-expeditedssl"></i>
        <span class="sidebar-mini-hide">Sửa thông tin cá nhân</span>
    </a>
</li>
