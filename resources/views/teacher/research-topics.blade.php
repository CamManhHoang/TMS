@extends('layouts.app')

@section('title')
    Các Hướng Nghiên Cứu
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
                                data-target="#add-research">
                            <i class="fa fa-plus-circle"></i> Thêm hướng nghiên cứu
                        </button>
                    </div>
                    <h3 class="block-title">Danh sách hướng nghiên cứu</h3>
                </div>

                <div class="block-content">
                    <table class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên hướng nghiên cứu</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($researches as $research)
                            <tr>
                                <td><strong>{{ $stt++ }}</strong></td>
                                <td style="max-width: 250px">{{ $research->name }}</td>
                                <td style="max-width: 300px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $research->description }}">{{ $research->description }}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        {{ Form::open(['method' => 'DELETE', 'route'=>['research.delete', $research->id], 'class' => 'float-left']) }}
                                        {{ Form::button('<i class="fa fa-times"></i>', [
                                            'type' => 'submit',
                                            'class' => 'btn btn-xs btn-danger',
                                            'data-toggle' => 'tooltip',
                                            'title' => '',
                                            'data-original-title' => 'Xóa hướng nghiên cứu',
                                            'onclick' => "return confirm('Xác nhận xóa hướng nghiên cứu?')"
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
    @include('teacher.modals.add-research')
@endsection