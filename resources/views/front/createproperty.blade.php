
@extends('layouts.app')

@section('content')

@include('inc.navbar')
<div class="createproperty" style="text-align: center; margin:20px; background-color:rgba(240, 240, 240, 0.3)">
    <h1>POST A NEW PROPERTY</h1>
    <form action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" style="width:400px; height:30px; text-align:center; margin:20px; border:outset; background-color:silver"><br>
        <input type="text" name="title" style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="TITLE"><br>
            <label>
                <input name="purpose" value="Sale" type="radio" style="margin:20px 0px" />
                <span>Sale</span>
            </label>

            <label>
                <input name="purpose" value="Rent" type="radio" style="margin:20px 0px"  />
                <span>Rent</span>
            </label><br>

            <label>
                <input name="type" value="House" type="radio" style="margin:20px 0px"  />
                <span>House</span>
            </label>
            <label>
                <input name="type" value="Apartment" type="radio" style="margin:20px 0px"  />
                <span>Apartment</span>
            </label><br>

        <input type="number" name="bedroom"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="TOTAL BEDROOM"><br>

        <input type="number" name="bathroom"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="TOTAL BATHROOM"><br>

        <input type="text" name="floor_plan"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="FLOOR PLAN"><br>

        <input type="text" name="city"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="CITY"><br>

        <input type="text" name="address"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="ADDRESS"><br>

        <input type="text" name="description"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="DESCRIPTION"><br>

        <input type="number" name="price"  style="width:400px; height:30px; text-align:center; margin:20px; border:inset" placeholder="PRICE"><br>

        <button  style="width:100px; height:30px; text-align:center; margin:20px">Create</button>
    </form>
</div>
@include('inc.footer')
@endsection