@extends('layouts.main')

@section('title')
    Update message
@endsection

@section('content')
    <h1>Update message - {{ $data->subject }}</h1>
    <form class = "" action="{{ route('contact-update-submit', $data->id) }}" method="POST">
        @csrf

        <div class="form-group">   
                <label for="name">Введите имя</label>
                <input type="text" class="form-control" value = "{{ $data->name }}" id="name" name="name"  placeholder="Enter name">
        </div>

        <div class="form-group">   
                <label for="email">Введите  email</label>
                <input type="text" class="form-control" value = "{{ $data->email }}" id="email" name="email"  placeholder="Enter email">
        </div>

        <div class="form-group">   
                <label for="subject">Введите тему сообщения</label>
                <input type="text" class="form-control" value = "{{ $data->subject }}" id="subject" name="subject"  placeholder="Enter subject">
        </div>

        <div class="form-group">   
                <label for="message">Введите текст сообщения</label>
                <textarea class="form-control" id="message" name="message">{{ $data->message }}</textarea>

        </div>

        <button type="submit" class="btn btn-primary mb-2"> Обновить</button>
    </form>
    
@endsection