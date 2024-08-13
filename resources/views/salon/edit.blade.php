<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Place</h1>
        <form action="{{ route('salon.update', $salons->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" placeholder="Akmal Vahobow" id="name" name="name" class="form-control" value="{{ $salons->name }}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" placeholder="92-903-00-03" id="phone" name="phone" class="form-control" value="{{ $salons->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Эл. почта:</label>
                <input type="email" placeholder="Akmal@gamil.com" id="email" name="email" class="form-control" value="{{ $salons->email }}">
            </div>
            <div class="form-group">
                <label for="working_hours">График работы:</label>
                <input type="text" placeholder="Dushanbe: 08:00 - 16:00" id="working_hours" name="working_hours" class="form-control" value="{{ $salons->working_hours }}">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
