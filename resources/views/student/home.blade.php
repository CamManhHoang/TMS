@extends('student.layout')

@section('title')
    TMS - Students Section
@endsection

@section('content')
    <div class="block">
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="/teachers-info">
                <div class="block-content block-content-full bg-amethyst-dark">
                    <i class="fa fa-users fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>Thông tin giảng viên</strong>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="/register-status">
                <div class="block-content block-content-full bg-primary">
                    <i class="fa fa-book fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>Trạng thái đăng ký</strong>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="/my-topic">
                <div class="block-content block-content-full bg-modern-dark">
                    <i class="fa fa-bell fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>Trạng thái đề tài</strong>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="block block-link-hover1 text-center" href="/settings">
                <div class="block-content block-content-full bg-info">
                    <i class="fa fa-cogs fa-5x text-white"></i>
                </div>
                <div class="block-content block-content-full block-content-mini">
                    <strong>Cài đặt</strong>
                </div>
            </a>
        </div>
    </div>
@endsection
