@extends('layouts.app')

@section('content')

@include('inc.navbar')


<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>REPLY</h1>
    <form action="{{route('sentmessage.store')}}" method="POST" >
        @csrf
        <label>Property Id</label><br>
        <input type="text" name="property_id" style="width:400px; height:30px; text-align:center; margin:20px; border:inset" value="{{$message->property_id}}" readonly><br>
        <label>Recipient  </label><br>
        <input type="text" name="agent_id" style="width:400px; height:30px; text-align:center; margin:20px; border:inset" value="{{$message->user_id}}" readonly><br>
        <label>Subject</label><br>
        <input type="text" name="name" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label>Message</label><br>
        <textarea name="message" style="width:400px; height:200px; text-align:center; margin:20px; border:inset; resize:none" ></textarea><br>
        <button type="submit" style="width:100px; height:30px; text-align:center; margin:20px">SEND</button>
    </form>
</div>
@include('inc.footer')
    
@endsection