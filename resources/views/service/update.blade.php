@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактировать сервис #{{ $services->id }}</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('service.update', $services->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="date">Название:</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}">
                <label for="time">Опысание:</label>
                <input type="time" class="form-control" name="description" value="{{$service->description}}">
                <label for="seats">duration:</label>
                <input type="text" class="form-control" name="duration" value="{{$service->duration}}">
                <label for="seats">Цена:</label>
                <input type="text" class="form-control" name="price" value="{{$service->price}}">
                <label for="seats">Цена барбера:</label>
                <input type="text" class="form-control" name="employee_price" value="{{$service->employee_price}}">
                <label for="">Категория сервиса:</label>
                <select id="" name="service_category_id">
                    @foreach($service_categories as $service_category)
                        <option value="{{$service_category->id}}">{{$service_category->name}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Сохранить" class="btn btn-primary form-control">
                <a href="{{ route('service.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
        </div>
    </div>
@endsection
