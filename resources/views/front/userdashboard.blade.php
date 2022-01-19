@extends('layouts.app')
<body style="background-image: url({{asset('images/bg16.jpg')}})">
@section('content')
@include('inc.navbar')
    

<div class="bloglist" style=" background-color:rgba(245, 245, 245, 0.9); display: flex; text-align:center; justify-content:center; margin:30px">
    <div style="display:block">@if(Auth::user()->role_id==1)<h1 style="width:150px">{{$user->username}}'s BLOGS</h1>@else<h1 style="width:150px">YOUR BLOGS</h1>@endif<b>Total Blogs Posted: {{$blogsCount}}</b><br><a href="{{route('blogs.create')}}"><button style="width:100px; height:30px; text-align:center;margin-top:20px">CREATE BLOG</button></a></div><div class="vl" style="border-left: 6px solid green;"></div>

    <table style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <thead>
            <tr style="background-color: #009879;
            color: #ffffff;
            text-align: left;">
                <th  style="padding: 12px 15px; text-align:center">TITLE</th>
                <th style="padding: 12px 15px; text-align:center">CREATED AT</th>
                <th style="padding: 12px 15px; text-align:center">BLOG ID</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$blog->title}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$blog->created_at}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$blog->id}}</td>
        <td style="padding: 12px 15px;"><a href="{{route('blogs.show', $blog->id)}}"><button style="width:100px; height:30px; text-align:center; margin:20px">Show Full Blog</button></a></td>
    
        </tr>
        @endforeach
        
        </tbody>
        
    </table>
    
</div>

@include('inc.footer')
@endsection
</body >