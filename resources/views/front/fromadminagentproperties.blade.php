@extends('layouts.app')
<body style="background-image: url({{asset('images/bg8.jpg')}});">
@section('content')

@include('inc.navbar')

<div class="agentproperties" style=" background-color:rgba(245, 245, 245, 0.8); display: block; text-align:center">
    <h1 style="padding:10px 10px; text-align:center">{{$user->username}}'s POSTED PROPERTIES</h1>
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
    <h4 style="text-align: center">TOTAL PROPERTIES POSTED: {{$propertiesCount}}</h4>
    <a href="{{ route('property.create') }}"><button style="width:200px; height:40px; margin:20px 10px;">POST A NEW PROPERTY</button></a>
</div>



@include('inc.footer')
@endsection
</body>