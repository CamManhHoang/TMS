@extends('student.layout')

@section('title')
    TMS - Đăng ký đề tài
@endsection

@section('content')
    <div class="block">
        @if(Auth::user()->student->topic_approved())
            <div class="block-content block-content-full bg-flat ribbon ribbon-bookmark ribbon-crystal">
                <div class="ribbon-box font-w600"><i class="fa fa-check"></i> Thông báo</div>
                <div class="text-center push-50-t push-50">
                    <h3 class="text-white-op">Đề tài của bạn đã được chấp nhận. Bạn không thể đăng ký đề tài khóa luận nữa.</h3>
                </div>
            </div>
        @else
            <div class="block-header">
                <h2 class="block-title">Danh sách đề tài khóa luận tốt nghiệp</h2>
            </div>
            <div class="block-content">
                <table id="all-topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên đề tài</th>
                        <th>Mô tả</th>
                        <th>Giảng viên</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td class="text-center">{{ $topic->id }}</td>
                                <td style="max-width: 300px">{{ $topic->name }}</td>
                                <td class="td-description" data-toggle="popover" data-placement="bottom" data-content="{{ $topic->description }}">{{ $topic->description }}</td>
                                <td>{{ $topic->teacher->full_name }}</td>
                                <td>{{ $topic->status() }}</td>
                                <td>
                                    @if ($topic->topic_available() && !$topic->topic_pending())
                                        <button class="btn btn-sm btn-square btn-success" data-toggle="modal" data-target="#modal-fadein" type="button">
                                            <i class="fa fa-check"></i> Đăng ký
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Fade In Modal -->
    <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="block block-themed block-transparent remove-margin-b">
                    <div class="block-header bg-primary-dark">
                        <ul class="block-options">
                            <li>
                                <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Xác nhận đăng ký đề tài</h3>
                    </div>
                    <div class="block-content">
                        <p>Bạn có chắc chắn muốn đăng ký đề tài khóa luận này?
                        Lưu ý rằng sau khi xác nhận thì đề tài của bạn sẽ cần phải nhận được sự đồng ý từ phía giảng viên cố vấn.
                        Chúng tôi sẽ thông báo cho bạn ngay khi đề tài của bạn được chấp nhận.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Fade In Modal -->

@endsection
