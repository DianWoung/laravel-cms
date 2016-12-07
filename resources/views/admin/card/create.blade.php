@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新增卡片</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/card/') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label  class="col-md-4 control-label">卡号</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="code" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">卡数据</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="data" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">编号</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="sernum" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">绑定用户</label>

                                <div class="col-md-6">
                                    <select name="uid" class="form-control">
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                            @endforeach
                                    </select>
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