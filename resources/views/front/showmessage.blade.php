@extends('layouts.app')
@section('content')

@include('inc.navbar')

<div class="showmessage" style="text-align: center; background-color:rgba(245,245,245,0.4); border:outset; padding:20px 20px; margin:30px;">
     <h1>{{$message->name}}</h1><br>
    Sender: {{$message->user_id}}<br>
    Received At: {{$message->created_at}}<br>
    For Property Id {{$message->property_id}}<br>
    <h3>Message:<br> {{$message->message}}</h3><br>
    <a href="{{route('sentmessage.edit', $message->id)}}"><button style="width:150px; height:30px; margin:20px 20px;">REPLY</button></a>
    </div>
    
    @include('inc.footer')
    
@endsection