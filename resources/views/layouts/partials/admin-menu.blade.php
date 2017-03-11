<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực cá nhân</span></li>
<li>
    <a class="{{ Request::is('teacher-info') ? 'active' : '' }}" href="/teacher-info">
        <i class="si si-badge"></i>
        <span class="sidebar-mini-hide">Thông tin giảng viên</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('research-topics') ? 'active' : '' }}" href="/research-topics">
        <i class="si si-trophy"></i>
        <span class="sidebar-mini-hide">Chủ đề nghiên cứu</span>
    </a>
</li>
<li>
    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Tables</span></a>
    <ul>
        <li>
            <a href="base_tables_styles.html">Styles</a>
        </li>
    </ul>
</li>
<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực quản trị</span></li>
<li>
    <a class="{{ Request::is('pending-topics') ? 'active' : '' }}" href="/pending-topics">
        <i class="fa fa-list-alt"></i>
        <span class="sidebar-mini-hide">Đề tài chờ xử lý</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('modify-topics') ? 'active' : '' }}" href="/modify-topics">
        <i class="fa fa-edit"></i>
        <span class="sidebar-mini-hide">Yêu cầu sửa đề tài</span>
    </a>
</li>
