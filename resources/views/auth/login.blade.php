@extends('auth.layouts')

@section('title')
    <title>Đăng nhập tài khoản</title>
@endsection

@section('content')

    <section class="colorBg1 colorBg">
        <div class="container">

            <div class="login-form-section">

                @include('layouts.partials.errors')

                <div class="login-content" data-animation="bounceIn">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="section-title">
                            <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}">
                            </div>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" required="required" class="form-control" name="password" placeholder="Mật khẩu"/>
                            </div>
                        </div>

                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="remember iCheck" checked>
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;Nhớ tài khoản</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-right green-btn">Đăng Nhập &nbsp; <i class="icon-chevron-right"></i></button>
                        </div>

                    </form>
                </div>

                {{--<div class="login-form-links link1 " data-animation="fadeInLeftBig" data-animation-delay=".2s">--}}
                    {{--<h4 class="blue">Bạn chưa có tài khoản?</h4>--}}
                    {{--<span>Đừng lo lắng!</span>--}}
                    {{--<a href="/register" class="blue">Click vào đây</a>--}}
                    {{--<span>để đăng ký</span>--}}
                {{--</div>--}}

                <div class="login-form-links link2 " data-animation="bounceIn" data-animation-delay=".4s">
                    <h4 class="green">Quên mật khẩu?</h4>
                    <span>Không sao cả!</span>
                    <a href="/password/reset" class="green">Click vào đây</a>
                    <span>Để reset mật khẩu</span>
                </div>
            </div>

        </div>
    </section>

@endsection

