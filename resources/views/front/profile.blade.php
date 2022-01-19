@extends('layouts.app')
<body style="background-image:url({{asset('images/bg9.jpg')}})">
@section('content')

@include('inc.navbar')


<div class="bloglist" style=" background-color:rgba(245, 245, 245, 0.9); display: flex; text-align:center; margin:20px; justify-content:center">
    <div style="display:block; margin:30px"><img src="{{asset('images/'.$user->image)}}" style="width:300px; border:outset"><br>
        
        @if (Auth::user()->role_id == 1)
        <a href="{{route('profile.edit', $user->id)}}"><button style="width:150px; height:30px; text-align:center; margin:20px">EDIT PROFILE</button></a><br>
            <form action="{{route('admindashboardprofile.destroy',$user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button style="width:150px; height:30px; margin:0 10px;">DELETE ACCOUNT</button>
            </form>  </div>
        @else
        <a href="{{route('profile.edit', $user->id)}}"><button style="width:100px; height:30px; text-align:center; margin:20px">EDIT PROFILE</button></a><br>
        <a href="{{route('message.index')}}"><button style="width:100px; height:30px; text-align:center; margin:20px">INBOX</button></a></div>
        @endif
        
    <div class="vl" style="border-left: 6px solid green;"></div>

<div style="background-color: #009879; height:300px; width: 500px; padding-top:50px; margin: 50px">
    <b>HELLO!</b>  <h2>{{$user->username}}</h2><br>
    Email: {{$user->email}}<br>
    Gender: {{$user->gender}}<br>
    Current Address: {{$user->address}}<br>
    Hometown: {{$user->hometown}}<br>
    REGISTERED AT: {{$user->created_at}}<br>
    @if (Auth::user()->role_id == 1)
    <a href="{{route('userdashboard.show', $user->id)}}"><button style="width:150px; height:30px; text-align:center; margin:20px">SHOW {{$user->username}}'s BLOGS</button></a><br>
    <a href="{{route('message.index')}}"><button style="width:100px; height:30px; text-align:center; ">INBOX</button></a></div> 
    @if($user->role_id==2)
    <a href="{{route('agentdashboard.show', $user->email)}}"><button style="width:150px; height:40px; text-align:center; ">SHOW {{$user->username}}'s POSTED PROPERTIES</button></a><br> 
    @endif   
    @endif
</div>
</div>
    
@include('inc.footer')
@endsection
</body>