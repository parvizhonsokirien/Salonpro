@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактировать категорию сервисов #{{ $sercats->id }}</h3>
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
            <form action="{{ route('sercat.update', $sercats->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="date">Название:</label>
                <input type="text" class="form-control" name="name" value="{{$sercat->name}}">
                <label for="time">Опысание:</label>
                <input type="time" class="form-control" name="description" value="{{$sercat->description}}">

                <input type="submit" value="Сохранить" class="btn btn-primary form-control">
                <a href="{{ route('sercat.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
        </div>
    </div>
@endsection
