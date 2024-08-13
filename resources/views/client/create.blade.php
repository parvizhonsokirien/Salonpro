@extends('layouts.app')
@section('content')

    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1">Имя:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Телефон:</label>
        <input class="form-control" type="number" name="phone">

        <label for="exampleInputEmail1">Эл. почта:</label>
        <input class="form-control" type="email" name="email">
        <label for="exampleInputEmail1">Опысание:</label>
        <input class="form-control" type="text" name="description">

         <input type="submit" value="Добавить" class="btn btn-primary form-control">
    </form>
@endsection
