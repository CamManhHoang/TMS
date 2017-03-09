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
                                        {{ Form::open(['method' => 'PUT', 'route'=>['register-topic', $topic->id]]) }}
                                            {{ Form::button('<i class="fa fa fa-check"></i> ' . 'Đăng ký', [
                                                'type' => 'submit',
                                                'class' => 'btn btn-sm btn-square btn-success',
                                                'onclick' => "return confirm('Bạn có chắc chắc muốn đăng ký đề tài này?')"
                                                ])
                                            }}
                                        {{ Form::close() }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
