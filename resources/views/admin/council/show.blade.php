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
                    <h3 class="block-title">Danh sách khóa luận tốt nghiệp thuộc {{ $council->council_name }}</h3>
                </div>

                <div class="block-content">
                    <table id="topics" class="table table-striped table-borderless table-header-bg table-responsive table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sinh viên</th>
                            <th>Tên đề tài</th>
                            <th>Giáo viên hướng dẫn</th>
                            <th>Giáo viên phản biện</th>
                            <th>Hội đồng</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($council->students as $student)
                            <tr>
                                <td class="text-center"><strong>{{ $stt++ }}</strong></td>
                                <td>{{ $student->full_name }}</td>
                                <td style="max-width: 250px;" class="td-description"
                                    data-toggle="popover"
                                    data-placement="bottom"
                                    data-content="{{ $student->topic->name }}">{{ $student->topic->name }}
                                </td>
                                <p style="display: none">{{ $teacher = $student->teachers()->where('student_approve', 1)->get() }}</p>
                                <td>{{ $teacher[0]->full_name  }}</td>
                                <td>
                                    {!! $student->reviewer->name or '<span class="label label-info">Chưa có</span>' !!}
                                </td>
                                <td>{!! $student->council->council_name or '<span class="label label-info">Chưa có</span>' !!}</td>
                                <td class="text-center">
                                    @if(!$student->council)
                                        <a href="{{ route('get_add_council_student', $student->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" title=""
                                           data-original-title="Phân sinh viên vào các hội đồng"><i
                                                    class="fa fa fa-plus"></i> Thêm vào hội đồng
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
    <!-- END Page Content
@endsection