<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Изменить данные о Барбере</h1>
        <form action="{{ route('employee.update', $employees->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">Имя:</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $employees->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия:</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $employees->last_name}}">
            </div>

            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ $employees->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Эл. почта:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $employees->email }}">
            </div>
            <div class="form-group">
                <label for="photo">Фото:</label>
                <input type="file" id="photo" name="photo" class="form-control" value="{{ $employees->photo }}">
            </div>

            <div class="form-group">
                <label for="skills">skills:</label>
                <input type="text" id="skills" name="skills" class="form-control" value="{{ $employees->skills}}">
            </div>

            <div class="form-group">
                <label for="services">Сервис:</label>
                <input type="text" id="services" name="services" class="form-control" value="{{ $employees->services}}">
            </div>

            <div class="form-group">
                <label for="schedule">schedule:</label>
                <input type="text" id="schedule" name="schedule" class="form-control" value="{{ $employees->schedule}}">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
