@extends('layouts.app')

@section('content')

@include('inc.navbar')

Property Id: {{$message->property_id}}<br>
Name: {{$message->name}}<br>
Email: {{$message->email}}<br>
Phone Number: {{$message->phone}}<br>
Message: {{$message->message}}<br>
Message Received At: {{$message->created_at}}<br>

<a href="{{route('message.show', $message->id)}}"><button>Give Reply</button></a>
    
@endsection