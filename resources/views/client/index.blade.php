@extends('layouts.app')
@section('title')
    <h3>Таблица клиентов</h3>
@endsection

@section('content')
    <a href="{{route('client.create')}}" class="btn btn-info">Добавить</a>
    <a href="{{route('main.index')}}" class="btn btn-primary">Перейти на сайт</a>

    <br><br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Эл. почта</th>
            <th>Опысание</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($clients as $client)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->description}}</td>
                <td>
                    <form action="{{route('client.destroy', $client->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('client.edit', $client->id)}}" method="get">
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
