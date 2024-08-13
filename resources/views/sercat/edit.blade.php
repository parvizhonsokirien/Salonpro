<!-- resources/views/places/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Изменить категорию сервисов</h1>
        <form action="{{ route('sercat.update', $sercats->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $sercats->name }}">
            </div>
            <div class="form-group">
                <label for="description">Опысание:</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ $sercats->description }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
