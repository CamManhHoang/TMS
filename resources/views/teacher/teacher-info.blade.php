@extends('layouts.app')

@section('title')
    Thông tin cá nhân
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-lg-3">
                <div class="collapse navbar-collapse remove-padding" id="inbox-nav">
                    <!-- Account -->
                    <div class="block block-themed">
                        <div class="block-header bg-amethyst-dark">
                            <ul class="block-options">
                                <li>
                                    <button type="button"><i class="si si-settings"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Tổng quan</h3>
                        </div>
                        <div class="block-content text-center">
                            <div class="js-pie-chart pie-chart push" data-percent="35" data-line-width="3"
                                 data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee"
                                 data-scale-color="#dddddd">
                                <span>
                                    <img style="max-width: 100px" src="img/profile.png" alt="">
                                </span>
                                <canvas height="100" width="100"></canvas>
                            </div>
                            <div class="h4 push-15-t push-5">{{ $teacher->full_name }}</div>
                        </div>
                        <div class="block-content">
                            <ul class="nav nav-pills nav-stacked push">
                                <li>
                                    <a href="/student-topics">
                                        <span class="badge pull-right">{{ $teacher->count_student_topics() }}</span><i
                                                class="fa fa-list-ol"></i> Sinh viên tham gia
                                    </a>
                                </li>
                                <li>
                                    <a href="/students-register">
                                        <span class="badge pull-right">{{ $teacher->count_students_register() }}</span><i
                                                class="fa fa-list-alt"></i> Sinh viên đăng ký
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Account -->
                </div>
                <!-- END Collapsible Inbox Navigation -->
            </div>
            <div class="col-sm-7 col-lg-9">
                <div class="block block block-themed">
                    <div class="block-header bg-amethyst-dark">
                        <ul class="block-options">
                            <li>
                                <button type="button"><i class="si si-settings"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Thông tin chi tiết</h3>
                    </div>
                    <div class="block-content">
                        <h3>Giảng viên: {{ $teacher->full_name }}</h3>
                        <br>
                        <div>
                            <strong>Tiểu sử</strong>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                aliquid distinctio et iure, quas
                                sint sunt voluptatum. Aliquid magni maiores non officia sapiente tempora voluptate? Ad
                                aliquam laborum quam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. A
                                aliquid distinctio et iure, quas
                                sint sunt voluptatum. Aliquid magni maiores non officia sapiente tempora voluptate? Ad
                                aliquam laborum quam voluptate.</p>
                        </div>
                        <p>
                            <strong>Nơi công tác</strong>: {{ $teacher->department->name_vn or '' }}
                        </p>
                        <p>
                            <strong>Email</strong>: {{ $teacher->user->email }}
                        </p>
                        <p>
                            <strong>Chức vụ</strong>: {{ $teacher->position }}
                        </p>
                        <p>
                            <strong>Hướng nghiên cứu</strong>: {{ $teacher->research }}
                        </p>
                        <div>
                            <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square social"></i></a>
                            <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square social"></i></a>
                            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square social"></i></a>
                            <a href="mailto:{{ $teacher->user->email }}"><i id="social-em" class="fa fa-envelope-square social"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END Page Content -->
@endsection