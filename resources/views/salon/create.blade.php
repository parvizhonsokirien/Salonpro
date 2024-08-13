<!-- resources/views/places/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить  Салон</h1>
        <form action="{{ route('salon.store') }}" method="POST">
            @csrf
            <label for="name">Название:</label>
            <input type="text" placeholder="Akmal Vahobow" id="name" name="name" class="form-control">
            <label for="phone">Телефон:</label>
            <input type="text" placeholder="92-903-00-03" id="phone" name="phone" class="form-control">
            <label for="email">Эл. почта:</label>
            <input type="email" placeholder="Akmal@gamil.com" id="email" name="email" class="form-control">
            <label for="working_hours">График работы:</label>
            <input type="text" placeholder="Dushanbe: 08:00 - 16:00" id="working_hours" name="working_hours" class="form-control"><br>
            <input type="submit" value="Create" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
