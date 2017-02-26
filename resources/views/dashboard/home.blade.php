@extends('layouts.app')

@section('title')
    Trung tâm điều khiển
@endsection

@section('content')
    <!-- Page Header -->
    <div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
        <div class="push-50-t push-15">
            <h1 class="h2 text-white animated zoomIn">BẢNG ĐIỀU KHIỂN</h1>
            <h2 class="h5 text-white-op animated zoomIn">Xin chào {{ Auth::user()->username }}</h2>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="">
                <!-- Main Dashboard Chart -->
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Weekly Overview</h3>
                    </div>

                    <div class="block-content text-center">
                        <div class="row items-push text-center">
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                            </div>
                            <div class="col-xs-6 col-lg-3 visible-lg">
                                <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                            </div>
                            <div class="col-xs-6 col-lg-3 visible-lg">
                                <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Dashboard Chart -->
            </div>
        </div>

    </div>
    <!-- END Page Content -->
@endsection