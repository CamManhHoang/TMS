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

<li class="nav-main-heading"><span class="sidebar-mini-hide">Quản lý khóa luận</span></li>
<li>
    <a class="{{ Request::is('councils*') ? 'active' : '' }}" href="/councils">
        <i class="fa fa-th-large"></i>
        <span class="sidebar-mini-hide">Hội đồng bảo vệ</span>
    </a>
</li>
<li>
    <a class="{{ Request::is('students-defense*') ? 'active' : '' }}" href="/students-defense">
        <i class="fa fa-group"></i>
        <span class="sidebar-mini-hide">DS sinh viên BVKL</span>
    </a>
</li>
{{--<li>--}}
    {{--<a class="{{ Request::is('students-department*') ? 'active' : '' }}" href="/students-department">--}}
        {{--<i class="fa fa-group"></i>--}}
        {{--<span class="sidebar-mini-hide">SV BVKL theo Bộ môn</span>--}}
    {{--</a>--}}
{{--</li>--}}

<li class="nav-main-heading"><span class="sidebar-mini-hide">Khu vực thiết lập</span></li>
<li>
    <a class="{{ Request::is('system-settings') ? 'active' : '' }}" href="/system-settings">
        <i class="si si-settings"></i>
        <span class="sidebar-mini-hide">Cài đặt hệ thống</span>
    </a>
</li>
