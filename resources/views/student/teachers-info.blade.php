@extends('student.layout')

@section('title')
    TMS - ĐĂNG KÝ LÀM KHÓA LUẬN VỚI GIÁO VIÊN CỐ VẤN
@endsection

@section('content')
    <div class="block">
        @if($student_approved)
            <div class="block-content block-content-full bg-flat ribbon ribbon-bookmark ribbon-crystal">
                <div class="ribbon-box font-w600"><i class="fa fa-check"></i> Thông báo</div>
                <div class="text-center push-50-t push-50">
                    <h3 class="text-white-op">Bạn đã đồng ý tham gia nghiên cứu khóa luận với 1 giảng viên rồi. Do đó không thể đăng ký nữa.</h3>
                </div>
            </div>
        @else
            <div class="block-header">
                <h2 class="block-title text-center">Đăng ký làm khóa luận với giáo viên cố vấn</h2>
            </div>
            <div class="block-content">
                <div class="block-content">
                    <table id="all-topics"
                           class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="column-title">Họ và Tên</th>
                            <th>Bộ môn</th>
                            <th>Học Vị</th>
                            <th>Hướng nghiên cứu</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                <td style="max-width: 300px">
                                    <strong>{{ $teacher->full_name }}</strong>
                                </td>
                                <td>{{ $teacher->department->name_vn or ''}}</td>
                                <td>{{ $teacher->position }}</td>
                                <td style="max-width: 300px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $teacher->research }}">{{ $teacher->research }}
                                </td>
                                <td>
                                    @if (! Auth::user()->student->teachers->contains($teacher->id))
                                        {{ Form::open(['method' => 'POST', 'route'=>['teacher-student', $teacher->id]]) }}
                                        {{ Form::hidden('teacher_id', $teacher->id) }}
                                        {{ Form::button('<i class="fa fa-plus-square"></i> ' . 'Đăng ký', [
                                            'type' => 'submit',
                                            'class' => 'btn btn-sm btn-square btn-primary',
                                            'onclick' => "return confirm('Bạn muốn đăng ký tham gia nghiên cứu đề tài khóa luận với giáo viên này?')"
                                            ])
                                        }}
                                        {{ Form::close() }}
                                    @else
                                        <button class="btn btn-sm btn-square btn-success">
                                            <i class="fa fa fa-check"></i> Đã đăng ký
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
