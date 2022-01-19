@extends('layouts.app')

@section('content')

@include('inc.navbar')

<div class="properties" style=" background-color:rgba(174, 171, 171, 0.8); display: block; text-align:center; padding:20px">
    <h1 style="padding:10px 10px; text-align:center">ALL POSTED PROPERTIES</h1>
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
                    @if (!Auth::guest() )
                        
                    @else
                        
                    @endif
                </div>
            </div>
        </div><br>
    @endforeach
    <h4>TOTAL PROPERTIES POSTED : {{$propertiesCount}}</h4>
    {{ 
        $properties->links('vendor.pagination.semantic-ui') 
    }}
</div>

@include('inc.footer')

@endsection

    
