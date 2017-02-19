@extends('auth.layouts')

@section('title')
    <title>Reset Mật Khẩu</title>
@endsection

@section('content')

    <section class="colorBg3 colorBg">
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
                    <form role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope icon-color"></i></span>
                                <input type="email" class="form-control" placeholder="Email" required="required" name="email" value="{{ old('email') }}" />
                            </div>
                        </div>

                        <div class="forget-form-action clearfix">
                            <a class="btn btn-success pull-left blue-btn" href="/login"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Quay lại  </a>
                            <button type="submit" class="btn btn-success pull-right green-btn">Gửi &nbsp;&nbsp; <i class="icon-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection
