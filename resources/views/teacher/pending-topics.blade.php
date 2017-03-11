@extends('layouts.app')

@section('title')
    Danh sách đề tài chờ xử lý
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Main Block -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Danh sách đề tài chờ xử lý</h3>
                </div>

                <div class="block-content">
                    <table id="pending-topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ Tên Sinh viên</th>
                            <th>Tên đề tài</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                <td>{{ $topic->student->full_name }}</td>
                                <td style="max-width: 250px">{{ $topic->name }}</td>
                                <td style="max-width: 300px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $topic->description }}">{{ $topic->description }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        {{ Form::open(['method' => 'PUT', 'route'=>['approve-topic', $topic->id], 'class' => 'float-left']) }}
                                            {{ Form::button('<i class="fa fa fa-check"></i>', [
                                                'type' => 'submit',
                                                'class' => 'btn btn-xs btn-info',
                                                'data-toggle' => 'tooltip',
                                                'title' => '',
                                                'data-original-title' => 'Đồng ý yêu cầu',
                                                'onclick' => "return confirm('Xác nhận đồng ý đăng ký đề tài của sinh viên?')"
                                                ])
                                            }}
                                        {{ Form::close() }}

                                        {{ Form::open(['method' => 'PUT', 'route'=>['reject-topic', $topic->id], 'class' => 'float-left']) }}
                                            {{ Form::button('<i class="fa fa-times"></i>', [
                                                'type' => 'submit',
                                                'class' => 'btn btn-xs btn-danger',
                                                'data-toggle' => 'tooltip',
                                                'title' => '',
                                                'data-original-title' => 'Xóa bỏ yêu cầu',
                                                'onclick' => "return confirm('Xác nhận hủy yêu cầu đề tài của sinh viên?')"
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
    <!-- END Page Content -->
@endsection