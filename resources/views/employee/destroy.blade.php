@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Удалить Барбера</h1>
        <p>Вы удаляете барбера "{{ $employee->first_name }}"?</p>

        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection
