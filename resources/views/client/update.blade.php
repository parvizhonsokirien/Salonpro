@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Изменить данные о клиенте #{{ $clients->id }}</h3>
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
            <form action="{{ route('client.update', $clients->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="date">Имя:</label>
                <input type="date" class="form-control" name="name" value="{{$client->name}}">
                <label for="seats">Телефон:</label>
                <input type="number" class="form-control" name="phone" value="{{$client->phone}}">
                <label for="seats">Эл. почта:</label>
                <input type="email" class="form-control" name="email" value="{{$client->email}}">
                <label for="seats">Опысание:</label>
                <input type="text" class="form-control" name="description" value="{{$client->description}}">

                <input type="submit" value="Сохранить" class="btn btn-primary form-control">
                <a href="{{ route('client.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
        </div>
    </div>
@endsection
