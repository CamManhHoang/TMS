@extends('layouts.app')

@section('title')
    Thêm đề tài khóa luận cho sinh viên
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Main Block -->
            <div class="col-md-6 col-md-offset-3">
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button"><i class="si si-settings"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Thêm đề tài khóa luận cho sinh viên {{ $student->full_name }}</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2">
                        @include('layouts.partials.errors')
                    </div>

                    <div class="block-content block-content-narrow">
                        <form class="form-horizontal" action="{{ route('topic.store', $student->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Tên đề tài <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Gõ tên đề tài...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="description">Mô tả <span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="description" name="description" rows="6" placeholder="Viết thêm một chút mô tả về đề tài khóa luận ở đây.."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-">
                                    <button class="btn btn-sm btn-primary" type="submit">Thêm đề tài</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END Main Block Chart -->
        </div>

    </div>
    <!-- END Page Content -->
@endsection