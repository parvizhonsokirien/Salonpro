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
    <a href="{{route('salon.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Телефон</th>
            <th>Эл. почта</th>
            <th>График работы</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($salons as $salon)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$salon->name }}</td>
                <td>{{$salon->phone}}</td>
                <td>{{$salon->email}}</td>
                <td>{{$salon->working_hours}}</td>
                <td>
                    <form action="{{route('salon.destroy', $salon->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('salon.edit', $salon->id)}}" method="get">
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
