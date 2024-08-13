@extends('layouts.app')
@section('content')
    <form action="{{route('client.update',$clients)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Имя:</label>
                <input type="text" name="name" value="{{$clients->name}}" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Телефон:</label>
            <input class="form-control" value="{{$clients->phone}}" type="number" name="phone">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Эл. почта:</label>
            <input class="form-control" value="{{$clients->email}}" type="email" name="email">
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Опысание:</label>
            <input class="form-control" value="{{$clients->description}}" type="text" name="description">
        </div>

        <button type="submit" class="btn btn-info">Изменить</button>
    </form>
@endsection

@section('footer')
@endsection
