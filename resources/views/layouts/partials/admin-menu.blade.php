<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực quản trị</span></li>
<li>
    <a class="{{ Request::is('departments*') ? 'active' : '' }}" href="/departments">
        <i class="si si-badge"></i>
        <span class="sidebar-mini-hide">Quản lý bộ môn</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('teachers') ? 'active' : '' }}" href="/teachers">
        <i class="si si-users"></i>
        <span class="sidebar-mini-hide">Quản lý giảng viên</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('students') ? 'active' : '' }}" href="/students">
        <i class="fa fa-users"></i>
        <span class="sidebar-mini-hide">Quản lý sinh viên</span>
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

<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực thiết lập</span></li>
<li>
    <a class="{{ Request::is('system-settings') ? 'active' : '' }}" href="/system-settings">
        <i class="si si-settings"></i>
        <span class="sidebar-mini-hide">Cài đặt hệ thống</span>
    </a>
</li>
