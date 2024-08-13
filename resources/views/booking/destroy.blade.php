@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Отменить заказ</h1>
        <p>Вы хотите отменить заказ "{{ $booking->client_name }}"?</p>

        <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('booking.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
