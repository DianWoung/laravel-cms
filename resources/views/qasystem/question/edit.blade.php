@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑问题</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/question/update') }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input type="hidden" value="{{ $questions->id }}" name="id">
                            <div class="form-group">
                                <label  class="col-md-4 control-label">问题</label>

                                <div class="col-md-6">
                                    <textarea type="text" class="form-control" name="title" required>{{ $questions->title }}</textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">选项</label>

                                <div class="col-md-6">
                                    @foreach($questions->option as $value)
                                    <input type="text" class="form-control" name="option[]" value="{{ $value }}" required>
                                        @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">答案</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="answer" value="{{ $questions->answer }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">分数</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="score" value="{{ $questions->score }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        提交
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection