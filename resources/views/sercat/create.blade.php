@extends('layouts.app')
@section('content')

    <form action="{{route('sercat.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1">Название:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Опысание:</label>
        <input type="text" name="description" class="form-control" id="exampleInputEmail1">

        <input type="submit" value="Добавить" class="btn btn-primary form-control">
    </form>
@endsection
