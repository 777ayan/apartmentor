@extends('layouts.app')
<body style="background-image:url({{asset('images/bg9.jpg')}})">
@section('content')

@include('inc.navbar')
<div style="text-align:center; background-color:rgba(245, 245, 245, 0.7); padding:25px 25px; margin:30px 30px">
    <h1>EDIT PROFILE INFORMATION</h1>
    @if(Auth::user()->role_id == 1)
    <form action="{{route('admindashboardprofile.update',$user->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image">Upload New Profile Photo:</label>
        <input type="file" name="image" style="margin:30px" notrequired><br>
        <select name="gender" style="width:450px; text-align:center; height:50px; margin-top:40px">
            <option style="display:none;">Gender</option>
            <option name="gender" value="MALE">MALE</option>
            <option name="gender" value="FEMALE">FEMALE</option>
            <option name="gender" value="OTHERS">OTHERS</option>
          </select><br>
          <label for="address" style="margin-top:60px">ADDRESS  </label>
          <input type="text" name="address" value="{{$user->address}}" style="width:375px;margin-top:60px; height:50px; text-align:center; border:inset"><br>
          <label for="hometown" style="margin-top:60px">HOMETOWN  </label>
          <input type="text" name="hometown" value="{{$user->hometown}}" style="width:355px;margin-top:60px; height:50px; text-align:center; border:inset"><br>
        <button style="width:100px; height:30px; text-align:center; margin:60px">Update</button>
    </form>
    @else
    <form action="{{route('profile.update',$user->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image">Upload New Profile Photo:</label>
        <input type="file" name="image" style="margin:30px" notrequired><br>
        <select name="gender" style="width:450px; text-align:center; height:50px; margin-top:40px">
            <option style="display:none;">Gender</option>
            <option name="gender" value="MALE">MALE</option>
            <option name="gender" value="FEMALE">FEMALE</option>
            <option name="gender" value="OTHERS">OTHERS</option>
          </select><br>
          <label for="address" style="margin-top:60px">ADDRESS  </label>
          <input type="text" name="address" value="{{$user->address}}" style="width:375px;margin-top:60px; height:50px; text-align:center; border:inset"><br>
          <label for="hometown" style="margin-top:60px">HOMETOWN  </label>
          <input type="text" name="hometown" value="{{$user->hometown}}" style="width:355px;margin-top:60px; height:50px; text-align:center; border:inset"><br>
        <button style="width:100px; height:30px; text-align:center; margin:60px">Update</button>
    </form>
    @endif
</div>
@include('inc.footer')
@endsection

</body>