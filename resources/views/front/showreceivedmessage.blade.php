@extends('layouts.app')

@section('content')

@include('inc.navbar')


<table>
    <thead>
        <tr>
            <th>Sender Username</th>
            <th>Sender Email</th>
            <th>Phone Number</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
    <tr>
    <td>{{$message->name}}</td>
    <td>{{$message->email}}</td>
    <td>{{$message->phone}}</td>
    <td>{{$message->message}}</td>
    <td><a href="{{route('agentmessage.show', $message->id)}}"><button>Show Details</button></a></td>

    </tr>
    @endforeach
    </tbody>
</table>

@include('inc.footer')

@endsection

    
