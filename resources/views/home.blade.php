@extends('master')
@section('content')
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </div>
    <link rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet" type="text/css">
    <title>HOME</title>
    <style>

    .textin{
        color: white;
        margin-right: 5px;
        margin-left: 7px;
    }
    .board{
        display: flex; 
        background-color: red;
        margin-top: 0px;
        font-family: 'Noto Sans';
        src: url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap");
    }

    

</style>
</head>
<body>
<div class="board">
        <table border="1" cellpadding="3" cellspacing="0" class="border-color" style="border-color: white">
    <tr>
        <td style="width:120px; text-align:center; color:yellow; font-size:40px"><strong>BC</strong></td>
        <td style="width:120px; color: white; text-align:center"><h3>BloodyCoin</h3></td>
        <td style="width:1100px; text-align:center; font-size:40px; color:white"><strong>Sejam Bem-vindos ao BloodyCoins</strong></td>
        <td style="width:150px; text-align:center"><h3><a style="color:white; text-decoration:none" href="{{route('login.index')}}" id="Log">Login</a></h3></td>
    </tr>
</table>
</div>   
</body>
</html>
@endsection