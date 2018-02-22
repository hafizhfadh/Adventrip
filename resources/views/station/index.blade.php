@extends('layouts.app')
@section('content')
    <a href="crud/create" class="btn btn-outline-secondary">Add New</a>
    <table class="table table-bordered table-responsive" style="margin-top: 10px">
        <thead>
            <th>NO</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>CREATED AT</th>
            <th colspan="2">ACTION</th>
        </thead>
        <tbody>
            @foreach($cruds as $crud)
            <tr>
                <td>{{ $crud->id }}</td>
                <td>{{ $crud->title }}</td>
                <td>{{ $crud->description }}</td>
                <td>{{ $crud->created_at }}</td>
                <td>
                    <a href="{{ route('crud.edit', $crud->id) }}" class="btn btn-outline-success">Edit</a>
                    {!! Form::open(['method'=>'delete','route'=>['crud.destroy',$crud->id]]) !!}
                    &nbsp;
                    {!! Form::submit('Delete',['class'=>'btn btn-outline-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>

@stop
@push('script')
  <script type="text/javascript">

  </script>
@endpush

@push('style')
  <style media="screen">

  </style>
@endpush