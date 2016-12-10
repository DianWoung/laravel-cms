@extends('layouts.app')
@section('content')
    <div id="app">
        <uploadfile></uploadfile>
    </div>
    {{--<form action="{{ url('admin/upload') }}" method="post" enctype="multipart/form-data">--}}
        {{--{{ method_field('POST') }}--}}
        {{--{{ csrf_field() }}--}}
        {{--<input type="file" name="file">--}}
        {{--<input type="submit">--}}
    {{--</form>--}}
@endsection
