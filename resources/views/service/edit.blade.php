<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Изменить сервис</h1>
        <form action="{{ route('service.update', $services->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $services->name }}">
            </div>
            <div class="form-group">
                <label for="description">Опысание:</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ $services->description }}">
            </div>
            <div class="form-group">
                <label for="duration">duration:</label>
                <input type="text" id="duration" name="duration" class="form-control" value="{{ $services->duration}}">
            </div>

            <div class="form-group">
                <label for="price">Цена:</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $services->price}}">
            </div>

            <div class="form-group">
                <label for="employee_price">Цена барбера:</label>
                <input type="text" id="employee_price" name="employee_price" class="form-control" value="{{ $services->employee_price }}">
            </div>

            <div class="card-body">
                <label for="exampleInputEmail1">Категория сервиса:</label>
                <select id="exampleInputEmail1" class="form-control" name="category_id">
                    @foreach($service_categories as $service_category)
                        <option value="{{$service_category->id}}">{{$service_category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
