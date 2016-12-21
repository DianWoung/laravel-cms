@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>问题管理</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
            </ol>
        </div>

        <div class="col-lg-2">
            <div class="title-action">
                <a href="{{url('/question/create')}}" class="btn btn-info">新增问题</a>
            </div>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>问题列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('flash::message')
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTablesAjax" >
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>问题</th>
                                    <th>选项</th>
                                    <th>答案</th>
                                    <th>分数</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                @foreach($questions as $question)
                                <tbody>
                                <td>{{ $question->id }}</td>
                                <td style="width:20%">{{ $question->title }}</td>
                                <td style="width:20%">@foreach(json_decode($question->options) as $value)
                                {{ $value }};
                                @endforeach
                                </td>
                                <td>{{ $question->answer }}</td>
                                <td>{{ $question->score }}</td>
                                <td>
                                    <a href="{{ url('question/'.$question->id.'/edit') }}" style="display: inline;">
                                        <button type="submit" class="btn btn-info">编辑</button>
                                    </a>


                                    <form action="{{ url('question/'.$question->id) }}" method="POST" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">删除</button>
                                    </form></td>
                                </tbody>
                                @endforeach
                            </table>
                            <span style="float: right"> {{ $questions->links() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
