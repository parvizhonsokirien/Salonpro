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
    <a href="{{route('sercat.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Опысание</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($sercats as $sercat)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sercat->name}}</td>
                <td>{{$sercat->description}}</td>

                <td>
                    <form action="{{route('sercat.destroy', $sercat->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('sercat.edit', $sercat->id)}}" method="get">
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
