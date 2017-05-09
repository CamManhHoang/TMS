@extends('layouts.app')

@section('title')
    Thêm sinh viên vào hội đồng
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- Main Block -->
            <div class="col-md-6 col-md-offset-3">
                <div class="block">
                    <div class="block-header">
                        <ul class="block-options">
                            <li>
                                <button type="button"><i class="si si-settings"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Thêm sinh viên {{ $student->full_name }} vào hội đồng</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2">
                        @include('layouts.partials.errors')
                    </div>

                    <div class="block-content block-content-narrow">
                        <form class="form-horizontal" action="{{ route('add_council_student', $student->id) }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                {{ Form::label('council_id', 'Tên hội đồng') }}
                                {{ Form::select('council_id', $councils_list, null, ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-">
                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END Main Block Chart -->
        </div>

    </div>
    <!-- END Page Content -->
@endsection