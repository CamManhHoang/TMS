@extends('layouts.app')

@section('title')
    Quản lý danh sách sinh viên
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Main Block -->
            <div class="block">
                <div class="block-header">
                    <div class="block-options-simple">
                        <button class="btn btn-sm btn-success btn-rounded" type="button" data-toggle="modal"
                                data-target="#add-student">
                            <i class="fa fa-plus-circle"></i> Thêm sinh viên
                        </button>
                    </div>
                    <h3 class="block-title">Quản lý danh sách sinh viên</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sinh viên</th>
                            <th>Mã sinh viên</th>
                            <th>Email</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                <td>{{ $student->full_name }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->email or '' }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::open(['method' => 'DELETE', 'route'=>['student.delete', $student->id], 'class' => 'float-left']) }}
                                        {{ Form::button('<i class="fa fa-times"></i>', [
                                            'type' => 'submit',
                                            'class' => 'btn btn-xs btn-danger',
                                            'data-toggle' => 'tooltip',
                                            'title' => '',
                                            'data-original-title' => 'Xóa sinh viên',
                                            'onclick' => "return confirm('Xác nhận xóa sinh viên này khỏi hệ thống?')"
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
            <!-- END Main Block Chart -->
        </div>

    </div>
    <!-- END Page Content
    {{--@include('admin.modals.add-teacher')--}}
@endsection