@extends('master')
@section('content')
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <div style="display: flex;" class="mb-2">
        <h3>BloodyCoin<h3>
        <h3>HOME</h3>
    </div>
    <a href="{{route('login.index')}}">Login</a>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet" type="text/css">
    <title>HOME</title>
</head>
<body>
<h3>Sejam Bem-vindos ao BloodyCoin</h3>
</body>
</html>
@endsection
