@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удалить сервис</h1>
        <p>Вы хотите удалить сервис "{{ $service->name }}"?</p>

        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('service.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
