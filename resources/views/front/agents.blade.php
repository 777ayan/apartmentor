@extends('layouts.app')

@section('content')

@include('inc.navbar')

<!-- Agents -->
<h1 style="display:block; text-align:center">ALL REGISTERED AGENTS</h1><br>
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
            <th style="padding: 12px 15px; text-align:center">Name</th>
            <th style="padding: 12px 15px; text-align:center">Email</th>
            <th style="padding: 12px 15px; text-align:center">Properties</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agents as $agent)
    <tr>
    <td style="padding: 12px 15px; text-align:center">{{$agent->name}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$agent->email}}</td>
    <td style="padding: 12px 15px; text-align:center"><a href="{{ route('agentinfo.show', $agent->id) }}"><button>Show Agent Listed Properties</button></a></td>

    </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('inc.footer')


@endsection

    
