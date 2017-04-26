@extends('layouts.app')

@section('title')
    Danh sách đề tài hướng dẫn
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
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle"
                                    data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Danh sách đề tài hướng dẫn</h3>
                </div>

                <div class="block-content">
                    <table id="topics"
                           class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ Tên Sinh viên</th>
                            <th>Tên đề tài</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td><strong>{{ $stt++ }}</strong></td>
                                <td>{{ $student->full_name }}</td>
                                <td style="max-width: 250px;" >{!! $student->topic->name or '<span class="label label-info">Chưa có</span>' !!}</td>
                                <td style="max-width: 250px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $student->topic->description or ''}}">{{ $student->topic->description or ''}}
                                </td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td class="text-center">
                                    @if(!$student->topic)
                                        <a href="{{ route('topic.create', $student->id) }}" class="btn btn-xs btn-info" data-toggle="tooltip" title=""
                                                data-original-title="Thêm đề tài khóa luận cho sinh viên"><i
                                                    class="fa fa fa-plus"></i> Thêm đề tài
                                        </a>
                                    @endif
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