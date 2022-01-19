
@extends('layouts.app')
<body style="background-image: url({{asset('images/bg12.jpeg')}})">
@section('content')


@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>EDIT BLOG</h1>
    <form action="{{route('blogs.update',$blog->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <input type="file" name="image" style="margin:10px" notrequired><br>
        <label>TITLE</label><br>
        <input type="text" name="title" value="{{$blog->title}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset" notrequired><br>
        <label>BLOG</label><br>
        <textarea name="body" style="width:400px; height:200px; text-align:center; margin:20px; border:inset; resize:none" >{{$blog->body}} </textarea><br>
        <button style="width:100px; height:30px; text-align:center; margin:20px">Update</button>
    </form>
</div>
@include('inc.footer')
@endsection
</body>