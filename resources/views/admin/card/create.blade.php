@extends('layouts.admin')
@section('css')
    <link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
   <div>
       <form action="{{url('admin/card')}}" method="post">

          {!! csrf_field() !!}
           <input type="text" name="code"><br>
           <input type="text" name="data"><br>
           <input type="text" name="sernum"><br>

           <input type="submit">
       </form>


   </div>






@endsection