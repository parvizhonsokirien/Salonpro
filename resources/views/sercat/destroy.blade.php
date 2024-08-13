@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удалить категорию сервисов</h1>
        <p>Вы хотите удалить категорию сервисов "{{ $sercat->name }}"?</p>

        <form action="{{ route('sercat.destroy', $sercat->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('sercat.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
