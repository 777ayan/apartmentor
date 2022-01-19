@extends('layouts.app')
<body style="background-image: url({{asset('images/bg17.jpg')}})">
@section('content')

@include('inc.navbar')

<div style="background-color:rgba(245, 245, 245, 0.8); margin:50px; text-align:center">
    <h1 style="display:block; text-align:center">ALL REGISTERED USERS</h1><br>
    <b style="display:block; text-align:center">Total Number Of Users: {{$usersCount}}</b><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <thead>
            <tr style="background-color: #009879;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">Role ID</th>
                <th style="padding: 30px 33px; text-align:center">Username</th>
                <th style="padding: 30px 33px; text-align:center">Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$user->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->role_id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->username}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$user->email}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('profile.show', $user->id)}}"><button style="width:100px; height:40px;">SHOW</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>
</div> 

<div style="background-color:rgba(245, 245, 245, 0.8); margin:50px; text-align:center">
    <h1 style="display:block; text-align:center">ALL REGISTERED AGENTS</h1><br>
    <b style="display:block; text-align:center">Total Number Of Agents: {{$agentsCount}}</b><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <thead>
            <tr style="background-color: #009879;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">Role ID</th>
                <th style="padding: 30px 33px; text-align:center">Username</th>
                <th style="padding: 30px 33px; text-align:center">Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agents as $agent)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$agent->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$agent->role_id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$agent->username}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$agent->email}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('profile.show', $agent->id)}}"><button style="width:100px; height:40px;">SHOW</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>
</div> 


<div class="agentproperties" style=" background-color:rgba(245, 245, 245, 0.8); display: block; text-align:center">
    <h1 style="padding:10px 10px; text-align:center">PROPERTIES</h1>
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


<div style="background-color:rgba(245, 245, 245, 0.8); margin:50px; text-align:center">
    <h1 style="display:block; text-align:center">ALL POSTED BLOGS</h1><br>
    <b style="display:block; text-align:center">Total Number Of Blogs: {{$blogsCount}}</b><br>
    <div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
    <table class="agenttable" style="border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
        <thead>
            <tr style="background-color: #009879;
            color: #ffffff;
            text-align: left;">
                <th style="padding: 30px 33px; text-align:center">ID</th>
                <th style="padding: 30px 33px; text-align:center">Posted By</th>
                <th style="padding: 30px 33px; text-align:center">User ID</th>
                <th style="padding: 30px 33px; text-align:center">Title</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
        <tr>
        <td style="padding: 12px 15px; text-align:center">{{$blog->id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$blog->author}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$blog->user_id}}</td>
        <td style="padding: 12px 15px; text-align:center">{{$blog->title}}</td>
        <td style="padding: 12px 15px; text-align:center"><a href="{{route('blogs.show',$blog->id)}}"><button style="width:100px; height:40px;">SHOW</button></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>
</div> 

@include('inc.footer')

@endsection