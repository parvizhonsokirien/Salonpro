@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <a href="{{route('service.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Опысание</th>
            <th>duration</th>
            <th>Цена</th>
            <th>Цена барбера</th>
            <th>Категория сервиса</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($services as $service)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->description}}</td>
                <td>{{$service->duration}}</td>
                <td>{{$service->price}}</td>
                <td>{{$service->employee_price}}</td>
                <td>{{$service->service_categories->name}}</td>
                <td>
                    <form action="{{route('service.destroy', $service->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('service.edit', $service->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
@endsection
