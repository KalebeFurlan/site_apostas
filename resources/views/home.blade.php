@extends('master')
@section('content')
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <div style="display: flex; background-color:red; margin: 0%;" class="mb-2">
        <img src="C:\Users\Acer\Documents\site de aposta\site_apostas\pixil-frame-0.png">
        <h3 class="textin">BloodyCoin | <h3>
        <a href="{{route('dashboard')}}">Login</a>
    </div>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet" type="text/css">
    <title>HOME</title>
</head>
<body>
<h3 class="textin"> Sejam Bem-vindos ao BloodyCoins</h3>
</body>
</html>
@endsection
<style>
    body{
        background-image: url(https://vistapointe.net/images/poker-5.jpg);
        background-size: 100%;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .textin{
        color: white;
        margin-right: 5px;
        margin-left: 5px;
    }
</style>
