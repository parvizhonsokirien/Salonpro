@extends('layouts.app')
@section('content')

    <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1">Название:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Опысание:</label>
        <input type="text" name="description" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">duration:</label>
        <input class="form-control" type="number" name="duration">
        <label for="exampleInputEmail1">Цены:</label>
        <input class="form-control" type="text" name="price">
        <label for="exampleInputEmail1">Цена барбера:</label>
        <input class="form-control" type="text" name="employee_price">
        <label for="">Категория сервиса:</label>
        <select name="service_categories_id" class="form-control">
            @foreach($service_categories as $service_category)
                <option value="{{$service_category->id}}">{{$service_category->name}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Добавить" class="btn btn-primary form-control">
    </form>
@endsection
