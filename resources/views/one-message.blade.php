@extends('layouts.main')

@section('title',"Message")
   

@section('content')
    <h1>{{$data->subject}}</h1>
    
    <div class = "alert alert-info">
        <h3>{{$data->subject}}</h3>
        <p>{{$data->message}}</p>
        <p>{{$data->email}}-{{$data->name}}</p>
        <p><small>{{$data->created_at}}</small></p>
        <a href="{{ route('contact-update',$data->id ) }}"><button class ="btn btn-primary">Редактировать</button></a>
        <a href="{{ route('contact-delete',$data->id ) }}"><button class ="btn btn-danger">Удалить</button></a>
    </div>
    
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст </p>

@endsection

