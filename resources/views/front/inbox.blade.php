@extends('layouts.app')
@section('content')

@include('inc.navbar')

<h1 style="display:block; text-align:center">RECEIVED MESSAGES</h1><br>
<div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
<table class="agenttable" style="border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
font-family: sans-serif;
min-width: 400px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <thead>
        <tr style="background-color: #009879;
        color: #ffffff;
        text-align: left;">
            <th style="padding: 12px 15px; text-align:center">Sender</th>
            <th style="padding: 12px 15px; text-align:center">Subject</th>
            <th style="padding: 12px 15px; text-align:center">Message</th>
            <th style="padding: 12px 15px; text-align:center">Received At</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
    <tr>
    <td style="padding: 12px 15px; text-align:center">{{$message->user_id}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$message->name}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$message->message}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$message->created_at}}</td>
    <td style="padding: 12px 15px; text-align:center"><a href="{{route('message.show', $message->id)}}"><button>SHOW</button></a></td>

    </tr>
    @endforeach
    </tbody>
</table>

</div>
<div style="text-align: center">
<b>TOTAL RECEIVED MESSGES : {{$messagesCount}}</b><br>
<a href="{{route('sentmessage.index')}}"><button style="padding: 12px 15px; text-align:center;margin:20px">SHOW SENT MESSAGES</button></a></div>
@include('inc.footer')
@endsection