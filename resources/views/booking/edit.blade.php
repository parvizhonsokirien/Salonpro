<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Изминения в заказе</h1>
        <form action="{{ route('booking.update', $bookings->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="client_name">Имя клиента:</label>
                <input type="text" id="client_name" name="client_name" class="form-control" value="{{ $bookings->client_name}}">
            </div>

            <div class="form-group">
                <label for="client_phone">Номер телефона:</label>
                <input type="text" id="client_phone" name="client_phone" class="form-control" value="{{ $bookings->client_phone}}">
            </div>

            <div class="form-group">
                <label for="client_email">Электронная почта:</label>
                <input type="email" id="client_email" name="client_email" class="form-control" value="{{ $bookings->client_email}}">
            </div>
            <div class="form-group">
                <label for="booking_date">Дата бронирования:</label>
                <input type="text" id="booking_date" name="booking_date" class="form-control" value="{{ $bookings->booking_date }}">
            </div>
            <div class="form-group">
                <label for="status">Статус:</label>
                <input type="text" id="status" name="status" class="form-control" value="{{ $bookings->status}}">
            </div>

            <div class="form-group">
                <label for="payment_status">payment_status:</label>
                <input type="text" id="payment_status" name="payment_status" class="form-control" value="{{ $bookings->payment_status}}">
            </div>

            <div class="card-body">
                <label for="exampleInputEmail1">Сервис:</label>
                <select id="exampleInputEmail1" class="form-control" name="service_id">
                    @foreach($services as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="card-body">
                <label for="exampleInputEmail1">Барбер:</label>
                <select id="exampleInputEmail1" class="form-control" name="employee_id">
                    @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
