@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Редактировать бронирование #{{ $bookings->id }}</h3>
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
            <form action="{{ route('booking.update', $bookings->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="date">Имя клиента:</label>
                <input type="text" class="form-control" name="client_name" value="{{$booking->client_name}}">

                <label for="date">Номер телефона:</label>
                <input type="text" class="form-control" name="client_phone" value="{{$booking->client_phone}}">
                <label for="date">Электронная почта:</label>
                <input type="email" class="form-control" name="client_email" value="{{$booking->client_email}}">
                <label for="time">Дата бронирования:</label>
                <input type="date" class="form-control" name="booking_date" value="{{$booking->booking_date}}">
                <label for="seats">Статус:</label>
                <input type="text" class="form-control" name="status" value="{{$booking->status}}">
                <label for="seats">payment_status:</label>
                <input type="text" class="form-control" name="payment_status" value="{{$booking->payment_status}}">

                <label for="">Сервис:</label>
                <select id="" name="service_id">
                    @foreach($services as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>

                <label for="">Барбер:</label>
                <select id="" name="employee_id">
                    @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Сохранить" class="btn btn-primary form-control">
                <a href="{{ route('booking.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
        </div>
    </div>
@endsection
