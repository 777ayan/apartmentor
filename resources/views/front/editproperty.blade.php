
@extends('layouts.app')

@section('content')


@include('inc.navbar')
<div class="editproperty" style="text-align: center; margin:20px; background-color:rgba(240, 240, 240, 0.3)">
    <h1>EDIT PROPERTY</h1>
    <form action="{{route('agentproperty.update',$property->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image" style="margin-top: 20px;">CHANGE DISPLAY PHOTO</label><br>
        <input type="file" name="image" value="{{$property->image}}" style="width:400px; height:30px; text-align:center; margin:20px; border:outset; background-color:silver"><br>
        <label for="title" style="margin-top: 20px;">TITLE</label><br>
        <input type="text" name="title" value="{{$property->title}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        @if ($property->purpose == 'sale')
        <label for="purpose" style="margin-top: 20px;">PROPERTY PURPOSE: </label>
            <label>
                <input name="purpose" value="sale" type="radio"  checked style="margin:30px 0px" />
                <span>Sale</span>
            </label>

            <label>
                <input name="purpose" value="rent" type="radio" style="margin:30px 0px"  />
                <span>Rent</span>
            </label>            
        @else
        <label for="purpose" style="margin-top: 20px;">PROPERTY PURPOSE: </label>
            <label>
                <input name="purpose" value="sale" type="radio" style="margin:30px 0px"   />
                <span>Sale</span>
            </label>

            <label>
                <input name="purpose" value="rent" type="radio"  checked  style="margin:30px 0px"/>
                <span>Rent</span>
            </label> 
        @endif
        <br>    
        @if ($property->type == 'house')
        <label for="house" style="margin-top: 20px;">PROPERTY TYPE: </label>
            <label>
                <input name="type" value="house" type="radio"  checked style="margin:30px 0px"/>
                <span>House</span>
            </label>
            <label>
                <input name="type" value="apartment" type="radio"   style="margin:30px 0px"/>
                <span>Apartment</span>
            </label><br>
        @else
        <label for="house" style="margin-top: 20px;">PROPERTY TYPE: </label>
            <label>
                <input name="type" value="house" type="radio" style="margin:30px 0px" />
                <span>House</span>
            </label>
            <label>
                <input name="type" value="apartment" type="radio"  checked  style="margin:30px 0px"/>
                <span>Apartment</span>
            </label><br>
            @endif
          
        <label for="bedroom" style="margin-top: 20px;">TOTAL BEDROOM</label><br>
        <input type="number" name="bedroom" value="{{$property->bedroom}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="bathroom" style="margin-top: 20px;">TOTAL BATHROOM</label><br>
        <input type="number" name="bathroom" value="{{$property->bathroom}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="floor_plan" style="margin-top: 20px;">FLOOR PLAN</label><br>
        <input type="text" name="floor_plan" value="{{$property->floor_plan}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="city" style="margin-top: 20px;">CITY</label><br>
        <input type="text" name="city" value="{{$property->city}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="address" style="margin-top: 20px;">ADDRESS</label><br>
        <input type="text" name="address" value="{{$property->address}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="description" style="margin-top: 20px;">DESCRIPTION</label><br>
        <input type="text" name="description" value="{{$property->description}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label for="price" style="margin-top: 20px;">PRICE</label><br>
        <input type="number" name="price" value="{{$property->price}}" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>

        <button style="width:100px; height:30px; text-align:center; margin:20px" >Update</button>
    </form>

</div>
@include('inc.footer')
@endsection
