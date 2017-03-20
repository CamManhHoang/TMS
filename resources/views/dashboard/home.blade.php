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
            <div class="col-sm-6 col-lg-3">
                <a class="block block-link-hover1 text-center" href="/research-topics">
                    <div class="block-content block-content-full bg-amethyst-dark">
                        <i class="fa fa-book fa-5x text-white"></i>
                    </div>
                    <div class="block-content block-content-full block-content-mini">
                        <strong>Đề tài nghiên cứu</strong>
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
        </div>
    </div>
    <!-- END Page Content -->
@endsection