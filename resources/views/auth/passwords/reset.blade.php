@extends('auth.layouts')

@section('title')
    <title>Reset Mật Khẩu</title>
@endsection

@section('content')

    <section class="colorBg4 colorBg">
        <div class=" container">
            <br />
            <br />
            <br />

            <div class="forgot-password-section" data-animation="bounceInLeft">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @include('layouts.partials.errors')

                <div class="section-title">
                    <h3>QUÊN MẬT KHẨU</h3>
                </div>

                <div class="forgot-content">
                    <form role="form" method="POST" action="{{ url('/password/reset') }}">

                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
                                <input type="email" class="form-control" placeholder="Email" required="required" name="email" value="{{ $email or old('email') }}" />
                            </div>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
                                <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="Mật Khẩu Mới" required="required">
                            </div>
                        </div>

                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password" placeholder="Xác Nhận Mật Khẩu Mới" required="required">
                            </div>
                        </div>

                        <div class="forget-form-action clearfix">
                            <button type="submit" class="btn btn-success text-center green-btn">&nbsp;<i class="icon-refresh"></i>&nbsp; Reset Mật Khẩu</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection
