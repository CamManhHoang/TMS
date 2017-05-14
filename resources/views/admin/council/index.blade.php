@extends('layouts.app')

@section('title')
    Quản lý hội đồng bảo vệ khóa luận
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
                                data-target="#add-council">
                            <i class="fa fa-plus-circle"></i> Thêm hội đồng
                        </button>
                    </div>
                    <h3 class="block-title">Danh sách hội đồng bảo vệ Khóa luận tốt nghiệp trường Đại học Công Nghệ</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>Mã HĐ</th>
                            <th>Tên HĐ</th>
                            <th>Chủ tịch HĐ</th>
                            <th>Thư ký HĐ</th>
                            <th>PCT</th>
                            <th>UV</th>
                            <th>Số lượng Sinh viên</th>
                            <th>Niên khóa</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($councils as $council)
                                <tr>
                                    <td><strong>{{ $stt++ }}</strong></td>
                                        <td><a href="/councils-{{ $council->id }}">{{ $council->council_name }}</a></td>
                                    <td>{{ $council->chairman }}</td>
                                    <td style="max-width: 250px;">
                                        {{ $council->secretary }}
                                    </td>
                                    <td style="max-width: 250px;">
                                        {{ $council->vice_chairman }}
                                    </td>
                                    <td style="max-width: 250px;">
                                        {{ $council->commissary }}
                                    </td>
                                    <td class="text-center">
                                        {{ $council->students()->count() }}
                                    </td>
                                    <td>{{ date_format($council->created_at, 'Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/edit-council" class="btn btn-xs btn-primary" data-toggle="tooltip" title="" data-original-title="Chỉnh sửa thông tin"><i class="fa fa fa-edit"></i></a>
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
    @include('admin.modals.add-council')
@endsection