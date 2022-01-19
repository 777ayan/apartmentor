@extends('layouts.app')

@section('content')
@include('inc.navbar')
<section>

<div style="text-align:center; background-color:rgba(245, 245, 245, 0.8); margin:50px;">
<h2>SEARCH PROPERTIES</h2>

<form action="{{ route('search')}}" method="GET">


    <label >Enter City</label>
    <input type="text" name="city" style="margin:20px"><br>
    


    <select name="type"  style="margin:20px; width:200px; height:40px">
        <option value="" disabled selected>Choose Type</option>
        <option value="apartment">Apartment</option>
        <option value="house">House</option>
    </select><br>



    <select name="purpose" style="margin:20px; width:200px; height:40px">
        <option value="" disabled selected>Choose Purpose</option>
        <option value="rent">Rent</option>
        <option value="sale">Sale</option>
    </select><br>

    <label for="minprice">Min Price</label>
    <input type="number" name="minprice"  style="margin:20px"><br>
    


    <label for="maxprice">Max Price</label>
    <input type="number" name="maxprice"  style="margin:20px"><br>
    
    

    <button type="submit" style="width:100px; border-style:outset; margin:20px; height:30px; text-align:center;">
        <span>SEARCH</span>
    </button>



</form>

</div>

<div style="text-align:center; background-color:rgba(252, 172, 172, 1); padding:30px">
@foreach($properties as $property)


<div style="background-color:rgba(245, 245, 245, 0.8); margin:50px; padding:50px">    

        <img src="{{asset('images/'.$property->image)}}" alt="{{$property->title}}" style="width:250px">

        <br>
        <span title="{{$property->title}}">
            <a href="{{route('property.show', $property->id)}}">{{ $property->title }}</a>
        </span>
        <br>
            <span>{{ ucfirst($property->city) }}</span><br>
    
            <span>{{ ucfirst($property->address) }}</span><br>
        

        <h5>
            BDT{{ $property->price }}
            {{ $property->type }} for {{ $property->purpose }}
        </h5><br>


        <span>

            Bedroom: <strong>{{ $property->bedroom}}</strong> 
        </span><br>
        <span>

            Bathroom: <strong>{{ $property->bathroom}}</strong> 
        </span><br>
                                        

</div>
@endforeach
    </div>

<div>
{{ 
$properties->appends([
    'city'      => Request::get('city'),
    'type'      => Request::get('type'),
    'purpose'   => Request::get('purpose'),
    'bedroom'   => Request::get('bedroom'),
    'bathroom'  => Request::get('bathroom'),
    'minprice'  => Request::get('minprice'),
    'maxprice'  => Request::get('maxprice'),
    'minarea'   => Request::get('minarea'),
    'maxarea'   => Request::get('maxarea'),
])->links() 
}}

</section>
@endsection