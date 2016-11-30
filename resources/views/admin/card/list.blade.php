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
        @permission(config('admin.permissions.card.create'))
        <div class="col-lg-2">
            <div class="title-action">
                <a href="{{url('admin/card/create')}}" class="btn btn-info">新增卡片</a>
            </div>
        </div>
        @endpermission
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
                                    <th>{{trans('admin/user.model.id')}}</th>
                                    <th>{{trans('admin/user.model.name')}}</th>
                                    <th>{{trans('admin/user.model.username')}}</th>
                                    <th>{{trans('admin/user.model.created_at')}}</th>
                                    <th>{{trans('admin/user.model.updated_at')}}</th>
                                    <th>{{trans('admin/action.title')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection