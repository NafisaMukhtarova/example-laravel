@extends('layouts.main')

@section('title',"Messages")
   

@section('content')
    <h1>Messages</h1>
    @foreach ($data as $el)
    <div class = "alert alert-info">
        <h3>{{$el->subject}}</h3>
        <p>{{$el->email}}</p>
        <p><small>{{$el->created_at}}</small></p>
        <a href="{{ route('contact-data-one',$el->id ) }}"><button>Подробнее</button></a>
    </div>
    @endforeach
    
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст </p>

@endsection

