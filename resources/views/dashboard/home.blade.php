@extends('layouts.app')

@section('title')
    Trung tâm điều khiển
@endsection

@section('content')
    <!-- Page Header -->
    <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
        <div class="push-50-t push-15">
            <h1 class="h2 text-white animated zoomIn">BẢNG ĐIỀU KHIỂN</h1>
            <h2 class="h5 text-white-op animated zoomIn">Xin chào {{ Auth::user()->is_teacher() ? Auth::user()->teacher->full_name : 'Administrator' }}</h2>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">
        <div class="row">
            @if(Auth::user()->is_teacher())
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/teacher-info">
                        <div class="block-content block-content-full bg-info">
                            <i class="si si-badge fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Thông tin cá nhân</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/edit-profile">
                        <div class="block-content block-content-full bg-amethyst-dark">
                            <i class="fa fa-book fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Cập nhật thông tin</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/student-topics">
                        <div class="block-content block-content-full bg-primary">
                            <i class="fa fa-list-ul fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Đề tài hướng dẫn</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/pending-topics">
                        <div class="block-content block-content-full bg-modern-dark">
                            <i class="fa fa-list-alt fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Đề tài chờ xử lý</strong>
                        </div>
                    </a>
                </div>
            @elseif(Auth::user()->is_admin())
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/departments">
                        <div class="block-content block-content-full bg-amethyst-dark">
                            <i class="si si-badge fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Quản lý bộ môn</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/teachers">
                        <div class="block-content block-content-full bg-primary">
                            <i class="si si-users fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Quản lý giảng viên</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/students">
                        <div class="block-content block-content-full bg-modern-dark">
                            <i class="fa fa-users fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Quản lý sinh viên</strong>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="block block-link-hover1 text-center" href="/system-settings">
                        <div class="block-content block-content-full bg-info">
                            <i class="si si-settings fa-5x text-white"></i>
                        </div>
                        <div class="block-content block-content-full block-content-mini">
                            <strong>Cài đặt hệ thống</strong>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
    <!-- END Page Content -->
@endsection