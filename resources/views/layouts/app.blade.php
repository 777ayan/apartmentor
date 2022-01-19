<!DOCTYPE html>

<style>
    body{
        background-image:url({{asset('images/bg.jpg')}});
        background-size:cover;
        margin:0;
        padding:0;
        background-position:absolute;
    }
</style>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Apartmentor') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
</head>
    <body>
    
        @yield('content')

    </body>
  </html>