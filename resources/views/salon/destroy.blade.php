@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Отменить Salon</h1>
        <p>Вы хотите отменить salon "{{ $salon->name }}"?</p>

        <form action="{{ route('salon.destroy', $salon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('salon.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
