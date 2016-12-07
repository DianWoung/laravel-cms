@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>卡片管理</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                </li>
            </ol>
        </div>

        <div class="col-lg-2">
            <div class="title-action">
                <a href="{{url('admin/card/create')}}" class="btn btn-info">新增卡片</a>
            </div>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>卡片列表</h5>
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
                                    <th>卡号</th>
                                    <th>卡数据</th>
                                    <th>编号</th>
                                    <th>绑定用户</th>
                                    <th>绑定内容</th>
                                    <th>激活状态</th>
                                    <th>激活时间</th>
                                    <th>有效期</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                @foreach($cards as $card)
                                <tbody>
                                <td>{{ $card->id }}</td>
                                <td>{{ $card->code }}</td>
                                <td>{{ $card->data }}</td>
                                <td>{{ $card->sernum }}</td>
                                <td>{{ $card->username }}</td>
                                <td>{{ $card->content_id }}</td>
                                <td>{{ $card->is_active }}</td>
                                <td>{{ $card->insert_time }}</td>
                                <td>{{ $card->use_limit_time }}</td>
                                <td>
                                    <a href="{{ url('admin/card/'.$card->id.'/edit') }}" style="display: inline;">
                                        <button type="submit" class="btn btn-info">编辑</button>
                                    </a>


                                    <form action="{{ url('admin/card/'.$card->id) }}" method="POST" style="display: inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">删除</button>
                                    </form></td>
                                </tbody>
                                @endforeach
                            </table>
                            <span style="float: right"> {{ $cards->links() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
