@extends('layouts.app')
<body style="background-image: url({{asset('images/bg12.jpeg')}})">
@section('content')

@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <img src="{{asset('images/' . $blog->image)}}" style="width:350px;"><br>
    <h2> {{$blog->title}} </h2><br>
    Author: {{$blog->author}}<br>
    Created At: {{$blog->created_at}}<br>
    <p>{{$blog->body}}</p><br>
    <br>
    @if (!Auth::guest() && Auth::user()->email == $blog->author)
    <a href="{{route('blogs.edit', $blog->id)}}"><button style="width:100px; height:30px; text-align:center; margin:20px">EDIT BLOG</button></a>
    <form action="{{route('blogs.destroy',$blog->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button style="width:100px; height:30px; text-align:center; margin:20px">DELETE</button>
    </form>
    @endif
</div>
@include('inc.footer')
</body>
@endsection