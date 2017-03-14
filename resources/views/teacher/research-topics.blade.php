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
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Danh sách đề tài hướng dẫn</h3>
                </div>

                <div class="block-content">
                    <table class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên đề tài</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td><strong>{{ $stt++ }}</strong></td>
                                <td style="max-width: 250px">{{ $topic->name }}</td>
                                <td style="max-width: 300px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $topic->description }}">{{ $topic->description }}
                                </td>
                                <td>{{ $topic->research_status() }}</td>
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