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
    <a href="{{route('booking.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя клиента</th>
            <th>Номер телефона</th>
            <th>Электронная почта</th>
            <th>Дата бронирования</th>
            <th>Статус</th>
            <th>payment_status</th>
            <th>Сервис</th>
            <th>Барбер</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($bookings as $booking)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$booking->client_name}}</td>
                <td>{{$booking->client_phone}}</td>
                <td>{{$booking->client_email}}</td>
                <td>{{$booking->booking_date}}</td>
                <td>{{$booking->status}}</td>
                <td>{{$booking->payment_status}}</td>
                <td>{{$service->service->name}}</td>
                <td>{{$booking->employee->name}}</td>
                <td>
                    <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('booking.edit', $booking->id)}}" method="get">
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
