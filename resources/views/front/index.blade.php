<style>

h1{
    text-align: center;
    margin-top:10%;
}

h4{
    text-align: center;
}

.search{
    text-align:center;
}

.properties{
    background-color: darksalmon;
    margin-top: 250px;
}

.horizontal_slider{
    display:block;

}

.slider_container{
    display:block;
    white-space: nowrap;
    text-align: center;
    padding: 100px 50px;
}

.item{
    display: inline-block;
    margin: 10px 10px;
    border-style: inset;
    padding:50px 50px;
    font-size: 18px;
    background-color: antiquewhite;
    
}

.services{
    background-color: cornsilk;
    margin-top: 250px;
}


.service_horizontal_slider{
    display:block;

}

.service_slider_container{
    display:block;
    white-space: nowrap;
    text-align: center;
    padding-bottom: 50px;
}

.service_item{
    display: inline-block;
    margin: 10px 10px;
    border-style: inset;
    padding:30px 30px;
    font-size: 18px;
    background-color: whitesmoke;
    
}

.agents{
    background-color: whitesmoke;
    margin-top: 250px;
}


.agent_horizontal_slider{
    display:block;

}

.agent_slider_container{
    display:block;
    white-space: nowrap;
    text-align: center;
}

.agent_item{
    display: inline-block;
    margin: 10px 10px;
    padding:30px 30px;
    font-size: 18px;
    
}

</style>

@extends('layouts.app')
@section('content')


@include('inc.navbar')

<h1>APARTMENTOR</h1>
<h4>YOUR MENTOR FOR APARTMENT HUNTING</h4>

<div class="search">
@include('inc.search')
</div>

<div class="properties" style="padding-top:10px; text-align:center;">
    <h1>PROPERTIES</h1>
    <div class="horizontal_slider">
        <div class="slider_container">
            @foreach($properties as $property)
                <div class="item">
                    <img src="{{asset('images/'.$property->image)}}" alt="" style="width:250px;"><br>
                    <h3 style="border-bottom: 2px solid white">{{$property->title}}</h3><br>
                    <b>{{$property->type}} for {{$property->purpose}}</b><br>
                    <div style="background-color: red; margin:20px"><b> PRICE TK{{$property->price}} </b> </div><br>
                    <a href="{{ route('property.show', $property->id)}}"><button style="margin:20px; width:100px; height:30px; text-align:center;">SHOW</button></a>
                    
                </div>
            @endforeach
        </div>
    </div>
    <a href="{{ route('property.index')}}"><button style="margin:20px; width:200px; height:40px; text-align:center;">SHOW ALL PROPERTIES</button></a>
</div>

<div class="services" style="padding-top:10px; ">
    <h1>OUR SERVICES</h1>
    <div class="service_horizontal_slider">
        <div class="service_slider_container">
                <div class="service_item">
                    <i class="material-icons">person</i>
                    <h4>24/7 Client Sipport</h4><br>
                    <p>Contact us for any emergency, anytime!</p><br>
                </div>

                <div class="service_item">
                    <i class="material-icons">account_balance</i>
                    <h4>Loan Service</h4><br>
                    <p>Your dream home, just one step ahead.</p><br>
                </div><br>

                <div class="service_item">
                    <i class="material-icons">announcement</i>
                    <h4>24/7 Client Sipport</h4><br>
                    <p>Contact us for any emergency, anytime!</p><br>
                </div>

                <div class="service_item">
                    <i class="material-icons">computer</i>
                    <h4>24/7 Client Sipport</h4><br>
                    <p>Contact us for any emergency, anytime!</p><br>
                </div>
        </div>
    </div>
</div>
    

<div class="agents" style="padding-top:10px; ">
    <h1>OUR AGENTS</h1>
    <div class="agent_horizontal_slider">
        <div class="agent_slider_container">
            @foreach($agents as $agent)
                <div class="agent_item">
                    <img src="{{asset('images/'.$agent->image)}}" alt="" style="width:270px;  border-radius:50%; height:300px;"><br>
                    {{$agent->username}}<br>
                    {{$agent->email}}<br>
                </div>
            @endforeach
        </div>
    </div>
    <div style="text-align:center">
    <a href="{{route('agentinfo.index')}}"><button style="margin:20px; width:200px; height:40px; text-align:center;">SHOW ALL AGENTS</button></a>
    </div>
</div>

@include('inc.footer')


@endsection
