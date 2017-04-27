@extends('layouts.app')

@section('title')
    Quản lý bộ môn
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
                                data-target="#add-department">
                            <i class="fa fa-plus-circle"></i> Thêm bộ môn
                        </button>
                    </div>
                    <h3 class="block-title">Danh sách bộ môn của trường Đại học Công Nghệ</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên bộ môn (Tiếng Việt)</th>
                            <th>Tên bộ môn (Tiếng Anh)</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                    <td>{{ $department->name_vn }}</td>
                                    <td>{{ $department->name_en }}</td>
                                    <td style="max-width: 250px;">
                                        {{ $department->description }}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/edit-department" class="btn btn-xs btn-primary" data-toggle="tooltip" title="" data-original-title="Chỉnh sửa thông tin"><i class="fa fa fa-edit"></i></a>

                                            {{ Form::open(['method' => 'DELETE', 'route'=>['department.delete', $department->id], 'class' => 'float-left']) }}
                                                {{ Form::button('<i class="fa fa-times"></i>', [
                                                    'type' => 'submit',
                                                    'class' => 'btn btn-xs btn-danger',
                                                    'data-toggle' => 'tooltip',
                                                    'title' => '',
                                                    'data-original-title' => 'Xóa bộ môn',
                                                    'onclick' => "return confirm('Xác nhận xóa bộ môn này khỏi hệ thống?')"
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