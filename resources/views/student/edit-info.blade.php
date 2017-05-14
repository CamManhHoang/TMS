@extends('student.layout')

@section('title')
    Thông tin cá nhân
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-md-offset-2">
                <!-- Bootstrap Contact -->
                <div class="block block-themed">
                    <div class="block-header bg-info">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Cập nhật thông tin cá nhân</h3>
                    </div>
                    <div class="block-content">
                        <form class="form-horizontal" action="{{ route('student.update') }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <label for="name">Họ và tên</label>
                                    <input class="form-control" type="text" id="name" name="name" value="{{ $student->full_name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-xs-offset-3" for="class_uet">Lớp đào tạo</label>
                                <div class="col-xs-6 col-xs-offset-3">
                                    {{ Form::select('class_uet', $class_list, $student->class, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-send push-5-r"></i> Cập nhật thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Bootstrap Contact -->
            </div>
        </div>

    </div>
    <!-- END Page Content -->
@endsection