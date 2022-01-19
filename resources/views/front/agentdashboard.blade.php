@extends('layouts.app')
<body style="background-image: url({{asset('images/bg8.jpg')}});">
@section('content')

@include('inc.navbar')

<div class="agentproperties" style=" background-color:rgba(245, 245, 245, 0.8); display: block; text-align:center">
    <h1 style="padding:10px 10px; text-align:center">POSTED PROPERTIES</h1>
    @foreach ($properties as $property)
        <div class="showproperty" style=" background-color:rgba(245, 245, 245, 0.8); display: block; padding:30px 30px;">
            <img src="{{asset('images/'. $property->image)}}" alt="" style="width:300px; padding:30px 30px; border:inset">
            <div class="property" style="display: inline-block; padding:30px 30px; justify-content: center;">
                <div class="propertyinformation" style="display: inline-block; padding:30px 30px;  text-align:start;">
                    <h2>{{$property->title}}</h2><br>
                    <b>PROPERTY ID:</b> {{$property->id}}<br>
                    <b>PURPOSE:</b> {{$property->purpose}}<br>
                    <b>TYPE:</b> {{$property->type}}<br>
                    <b>TOTAL BEDROOM:</b> {{$property->bedroom}}<br>
                    <b>TOTAL BATHROOM:</b> {{$property->bathroom}}<br>
                    <b>FLOOR PLAN:</b> {{$property->floor_plan}}<br>
                    <b>CITY:</b> {{$property->city}}<br>
                    <b>ADDRESS:</b> {{$property->address}}<br>
                </div>
                <div class="buttonsPosition" style="display: inline-block; justify-content: center;" >
                    <a href="{{ route('property.show', $property->id) }}"><button style="width:100px; height:40px; margin:0 10px;">SHOW</button></a>
                    <a href="{{ route('agentproperty.edit', $property->id) }}"><button style="width:100px; height:40px; margin:0 10px;">EDIT</button></a>
                </div>
                <div class="buttonsPosition" style="display: inline-block;" >
                    <form action="{{route('agentproperty.destroy',$property->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="width:100px; height:40px; margin:0 10px;">DELETE</button>
                    </form>
                </div>
            </div>
        </div><br>
    @endforeach
    {{ 
        $properties->links('vendor.pagination.semantic-ui') 
    }}
    <h4 style="text-align: center">TOTAL PROPERTIES POSTED: {{$propertiesCount}}</h4>
    <a href="{{ route('property.create') }}"><button style="width:200px; height:40px; margin:20px 10px;">POST A NEW PROPERTY</button></a>
</div>

<div class="bloglist" style=" background-color:rgba(245, 245, 245, 0.9); display: flex; text-align:center; margin-top:150px; justify-content:center">
    <div style="display:block"><h1 style="width:150px">YOUR BLOGS</h1><b>Total Blogs Posted: {{$blogsCount}}</b><a href="{{route('blogs.create')}}"><button style="width:100px; height:30px; margin-top:20px; text-align:center;">CREATE BLOG</button></a></div><div class="vl" style="border-left: 6px solid green;"></div>

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
</body>