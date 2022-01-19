@extends('layouts.app')

@section('content')

@include('inc.navbar')


<div class="properties" style=" background-color:rgba(174, 171, 171, 0.8); display: block; text-align:center; padding:20px">
    <h1 style="padding:10px 10px; text-align:center">BLOGS</h1>
    @foreach ($blogs as $blog)
        <div class="showproperty" style=" background-color:rgba(245, 245, 245, 0.8); display: block; padding:30px 30px;">
            <img src="{{asset('images/'. $blog->image)}}" alt="" style="width:300px; padding:30px 30px; border:inset">
            <div class="property" style="display: inline-block; padding:30px 30px; justify-content: center;">
                <div class="propertyinformation" style="display: inline-block; padding:30px 30px;  text-align:start;">
                    <h2>{{$blog->title}}</h2><br>
                    <b>AUTHOR:</b> {{$blog->author}}<br>
                    <b>CREATED AT:</b> {{$blog->created_at}}<br>
                    <b>LAST UPDATED AT:</b> {{$blog->updated_at}}<br>
                    <b>BLOG:</b> {{$blog->body}}<br>

                </div>
                <div class="buttonsPosition" style="display: inline-block; justify-content: center;" >
                    <a href="{{ route('blogs.show', $blog->id) }}"><button style="width:100px; height:40px; margin:0 10px;">SHOW</button></a>
                    @if (!Auth::guest() )
                        
                    @else
                        
                    @endif
                </div>
            </div>
        </div><br>
    @endforeach
<h4>TOTAL BLOGS POSTED :</h4>
    {{ 
        $blogs->links('vendor.pagination.semantic-ui') 
    }}
@include('inc.footer')
@endsection

    
