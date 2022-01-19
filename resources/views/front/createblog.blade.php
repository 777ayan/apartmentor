@extends('layouts.app')
<body style="background-image: url({{asset('images/bg12.jpeg')}})">
@section('content')


@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>CREATE BLOG</h1>
    <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image"><br>
        <input type="text" name="title" style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="TITLE"><br>
        <textarea name="body" style="width:400px; height:200px; text-align:center; margin:20px; border:inset; resize:none" placeholder="DESCRIPTION"></textarea><br>
        <button style="width:100px; height:30px; text-align:center; margin:20px">Create</button>
    </form>
</div>
@include('inc.footer')
@endsection
</body>