@extends('layouts.app')
@section('content')

    <form action="{{route('booking.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1">Имя клиента:</label>
        <input type="text" name="client_name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Номер телефона:</label>
        <input type="text" name="client_phone" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Электронная почта:</label>
        <input type="email" name="client_email" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Дата бронирования:</label>
        <input type="text" name="booking_date" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Статус:</label>
        <input class="form-control" type="text" name="status">
        <label for="exampleInputEmail1">payment_status:</label>
        <input class="form-control" type="text" name="payment_status">

        <label for="">Сервис:</label>
        <select name="service_id" class="form-control">
            @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->name}}</option>
            @endforeach
        </select><br>

        <label for="">Барбер:</label>
        <select name="employee_id" class="form-control">
            @foreach($employees as $employee)
                <option value="{{$employee->id}}">{{$employee->first_name}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Добавить" class="btn btn-primary form-control">
    </form>
@endsection
