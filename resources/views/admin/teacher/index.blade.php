@extends('layouts.app')

@section('title')
    Quản lý danh sách giáo viên
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
                                data-target="#add-teacher">
                            <i class="fa fa-plus-circle"></i> Thêm giáo viên
                        </button>
                    </div>
                    <h3 class="block-title">Quản lý danh sách giáo viên</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên giáo viên</th>
                            <th>Email</th>
                            <th>Bộ môn</th>
                            <th>Học vị</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                <td>{{ $teacher->full_name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->department->name_vn or '' }}</td>
                                <td>Unknown</td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::open(['method' => 'DELETE', 'route'=>['teacher.delete', $teacher->id], 'class' => 'float-left']) }}
                                        {{ Form::button('<i class="fa fa-times"></i>', [
                                            'type' => 'submit',
                                            'class' => 'btn btn-xs btn-danger',
                                            'data-toggle' => 'tooltip',
                                            'title' => '',
                                            'data-original-title' => 'Xóa giáo viên',
                                            'onclick' => "return confirm('Xác nhận xóa giáo viên này khỏi hệ thống?')"
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