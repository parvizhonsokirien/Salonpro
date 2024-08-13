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
    <a href="{{route('employee.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Телефон</th>
            <th>Эл. почта</th>
            <th>Фото</th>
            <th>Skills</th>
            <th>Сервис</th>
            <th>Schedule</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$employee->first_name }}</td>
                <td>{{$employee->last_name }}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->photo}}</td>
                <td>{{$employee->skills}}</td>
                <td>{{$employee->services}}</td>
                <td>{{$employee->schedule}}</td>
                <td>
                    <form action="{{route('employee.destroy', $employee->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('employee.edit', $employee->id)}}" method="get">
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
