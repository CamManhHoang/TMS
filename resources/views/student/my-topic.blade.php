@extends('student.layout')

@section('title')
    TMS - Đăng ký đề tài
@endsection

@section('content')
    @if(!$topic)
        <div class="col-sm-6 col-sm-offset-3">
            <div class="block">
                <div class="block-content block-content-full ribbon ribbon-modern ribbon-danger ribbon-left">
                    <div class="ribbon-box font-w600">
                        <i class="fa fa-close"></i> Thông báo
                    </div>
                    <div class="text-center push-20-t push">
                        <i class="fa fa-files-o fa-3x text-flat-dark push"></i>
                        <h3 class="h4">Bạn chưa được giáo viên hướng dẫn phân công đề tài.</h3>
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="block col-sm-6 col-sm-offset-3">
            <div class="block-header">
                <h2 class="block-title text-center">Thông tin đề tài</h2>
            </div>
            <div class="block-content">
                <ul class="list list-timeline pull-t">
                    <li>
                        <i class="fa fa-briefcase list-timeline-icon bg-default"></i>
                        <div class="list-timeline-content">
                            <p class="font-w600">Tên đề tài</p>
                            <p class="font-s13">{{ $topic->name }}</p>
                        </div>
                    </li>

                    <li>
                        <i class="fa fa-database list-timeline-icon bg-smooth"></i>
                        <div class="list-timeline-content">
                            <p class="font-w600">Mô tả</p>
                            <p class="font-s13">{{ $topic->description }}</p>
                        </div>
                    </li>

                    <li>
                        <i class="fa fa-user list-timeline-icon bg-amethyst-dark"></i>
                        <div class="list-timeline-content">
                            <p class="font-w600">Giáo viên hướng dẫn</p>
                            <p class="font-s13">{{ $topic->teacher->full_name }}</p>
                        </div>
                    </li>

                    <li>
                        <i class="fa fa-bell list-timeline-icon bg-success"></i>
                        <div class="list-timeline-content">
                            <p class="font-w600">Trạng thái đề tài</p>
                            <p class="font-s13">Giáo viên đồng ý</p>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-file-pdf-o list-timeline-icon bg-city"></i>
                        <div class="list-timeline-content">
                            <p class="font-w600">Trạng thái hồ sơ</p>
                            <p class="font-s13">{{ $topic->docs_status ? 'Đã gửi hồ sơ' : 'Chưa gửi hồ sơ' }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    @endif
@endsection
