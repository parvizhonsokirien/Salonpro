<!-- resources/views/places/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить Барбера</h1>
        <form action="{{ route('employee.store') }}" method="POST">
            @csrf
            <label for="first_name">Имя:</label>
            <input type="text" id="first_name" name="first_name" class="form-control">

            <label for="last_name">Фамилия:</label>
            <input type="text" id="last_name" name="last_name" class="form-control">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" class="form-control">
            <label for="email">Эл. почта:</label>
            <input type="email" id="email" name="email" class="form-control">
            <label for="photo">Фото:</label>
            <input type="file" id="photo" name="photo" class="form-control">
            <label for="skills">Skills:</label>
            <input type="text" id="skills" name="skills" class="form-control">
            <label for="services">Сервис:</label>
            <input type="text" id="services" name="services" class="form-control">
            <label for="schedule">Schedule:</label>
            <input type="text" id="schedule" name="schedule" class="form-control">
            <input type="submit" value="Create" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
