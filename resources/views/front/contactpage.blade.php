@extends('layouts.app')
<body>
@section('content')

@include('inc.navbar')

<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>SEND MESSAGE</h1>
    <form action="{{route('contact.store')}}" method="POST" >
        @csrf
        <label>Subject</label><br>
        <input type="text" name="name" style="width:400px; height:30px; text-align:center; margin:20px; border:inset"><br>
        <label>Message</label><br>
        <textarea name="message" style="width:400px; height:200px; text-align:center; margin:20px; border:inset; resize:none" ></textarea><br>
        <button type="submit" style="width:100px; height:30px; text-align:center; margin:20px">SEND</button>
    </form>
</div>

<div class="properties" style="padding-top:10px; text-align:center;background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>THE DEVS</h1>
    <div >
    <div class="horizontal_slider" >
        <div class="slider_container" style="display:flex;">
                <div class="item" style="flex:1%">
                    <img src="{{asset('images/ayon.jpg')}}" alt="" style="width:200px; border-radius:50%"><br>
                    <b >Ayan Das</b><br>
                    <b >ID: 181-35-317</b><br>
                    <b >Department Of Software Engineering</b><br>
                    <b>Daffodil International University</b><br>  
                </div>
        </div>
    </div>
    </div>
    
</div>
<div style="text-align:center;background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
<h1>OUR SUPERVISOR</h1>
<img src="{{asset('images/mam.jpg')}}" alt="" style="width:200px; border-radius:50%"><br>
                    <b>Ms. Raihana Zannat</b><br>
                    <b>Projet Supervisor</b><br>
                    <b>Senior Lecturer</b><br>
                    <b >Department Of Software Engineering</b><br>
                    <b>Daffodil International University</b><br>  
</div>

@include('inc.footer')
@endsection
</body>