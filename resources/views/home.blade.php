@extends('master')
@section('content')
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    body{
        padding: 0;
        margin: 0;
        background-image: url("https://rare-gallery.com/uploads/posts/534366-poker.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
    }
.row{
    display: flex;
}
.cardgreen{
        margin: 200px;
        padding: 80px;
        border-radius: 20px;
        text-align: center;
        font-family: 'Noto Sans';
        src: url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap");
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRuL7M262yZCARUgKpkSpJIhF5pwRgkH6qCw&usqp=CAU");
        background-size: 100%;
        background-repeat: no-repeat;
        color: white;
       }
.cardblue{
        margin: 200px;
        padding: 80px;
        border-radius: 20px;
        text-align: center;
        font-family: 'Noto Sans';
        src: url("https://www.meupositivo.com.br/doseujeito/wp-content/uploads/2020/08/jogos-de-carta.jpg");
        background-image: url("https://www.meupositivo.com.br/doseujeito/wp-content/uploads/2020/08/jogos-de-carta.jpg");
        background-size: auto;
        background-repeat: no-repeat;
        color: white;
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
        <td style="width:150px; text-align:center"><h3><a style="color:white; text-decoration:none" href="{{route('login.index')}}"id="Log">Login</a></h3></td>
    </tr>
</table>
</div>
    <div class="row">
    <div class="cardgreen">
        <h2>Aposta de cavalos</h2>
      </div>
 
      <div class="cardblue">
        <h2>Jogo de cartas</h2>
      </div> 
    </div>  
</body>
</html>
@endsection
