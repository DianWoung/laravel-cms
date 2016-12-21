@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新增问题</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/question') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label  class="col-md-4 control-label">题目</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="title" required autofocus></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">选项</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="option[]" required value="A:"><br>
                                    <input type="text" class="form-control" name="option[]" required value="B:"><br>
                                    <input type="text" class="form-control" name="option[]" required value="C:"><br>
                                    <input type="text" class="form-control" name="option[]" required value="D:"><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">答案</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="answer" required><small style="color:red">(例：AB)</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">分数</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="score" required value="10">
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