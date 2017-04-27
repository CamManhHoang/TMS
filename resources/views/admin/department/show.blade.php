@extends('layouts.app')

@section('title')
    Các giáo viên trong bộ môn
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Main Block -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Danh sách giáo viên thuộc {{ $department->name_vn }}</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên giáo viên</th>
                            <th>Email</th>
                            <th>Học vị</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($department->teachers as $teacher)
                                <tr>
                                    <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                    <td>{{ $teacher->full_name }}</td>
                                    <td>{{ $teacher->email }}</td>
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
    @include('admin.modals.add-department')
@endsection