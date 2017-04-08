@extends('student.layout')

@section('title')
    TMS - Trạng thái đăng ký
@endsection

@section('content')
    <div class="block">
        <div class="block-header">
                <h2 class="block-title">Danh sách đăng ký giáo viên cố vấn</h2>
        </div>
        <div class="block-content">
            <table class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Tên giáo viên</th>
                    <th class="text-center">Bộ môn</th>
                    <th class="text-center">Trạng thái đăng ký</th>
                    <th class="text-center">Hành động</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($student->teachers as $teacher)
                        <tr>
                            <td class="text-center">{{ $stt++ }}</td>
                            <td class="text-center">{{ $teacher->full_name }}</td>
                            <td class="text-center">{{ $teacher->department->name_vn }}</td>
                            <td class="text-center">
                                {!! $teacher->pivot->teacher_approve ? '<span class="label label-success">Giảng viên đồng ý</span>' : '<span class="label label-primary">Đang chờ</span>' !!}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    @if($teacher->pivot->teacher_approve)
                                        {{ Form::open(['method' => 'PUT', 'route'=>['approve-teacher', $teacher->id], 'class' => 'float-left']) }}
                                        {{ Form::button('<i class="fa fa fa-check"></i>', [
                                            'type' => 'submit',
                                            'class' => 'btn btn-xs btn-info',
                                            'data-toggle' => 'tooltip',
                                            'title' => '',
                                            'data-original-title' => 'Đồng ý yêu cầu',
                                            'onclick' => "return confirm('Xác nhận đồng ý tham gia khóa luận với giáo viên này?')"
                                            ])
                                        }}
                                        {{ Form::close() }}
                                    @endif

                                    {{ Form::open(['method' => 'PUT', 'route'=>['reject-teacher', $teacher->id], 'class' => 'float-left']) }}
                                    {{ Form::button('<i class="fa fa-times"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-xs btn-danger',
                                        'data-toggle' => 'tooltip',
                                        'title' => '',
                                        'data-original-title' => 'Xóa bỏ yêu cầu',
                                        'onclick' => "return confirm('Xác nhận hủy đăng ký với giáo viên này?')"
                                        ])
                                    }}
                                    {{ Form::close() }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
