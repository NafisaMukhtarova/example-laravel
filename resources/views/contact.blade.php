@extends('layouts.main')

@section('title')
    Contact
@endsection

@section('content')
    <h1>Contact</h1>
    <form class = "" action="{{ route('contact-form') }}" method="POST">
        @csrf

        <div class="form-group">   
                <label for="name">Введите имя</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
        </div>

        <div class="form-group">   
                <label for="email">Введите  email</label>
                <input type="text" class="form-control" id="email" name="email"  placeholder="Enter email">
        </div>

        <div class="form-group">   
                <label for="subject">Введите тему сообщения</label>
                <input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter subject">
        </div>

        <div class="form-group">   
                <label for="message">Введите текст сообщения</label>
                <textarea class="form-control" id="message" name="message"></textarea>

        </div>

        <button type="submit" class="btn btn-primary mb-2"> Отправить</button>
    </form>
    
@endsection