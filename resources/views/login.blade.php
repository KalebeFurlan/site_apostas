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
<style>
    input{
        width: 100%;
        margin-bottom: 4px;
    }
    p{
        color: blue;
    }
    button{
        margin-top: 5px;
    }
    form{
        margin: 50px;
    }
    .container {
    height: 100vh;
    background-image: url("https://rare-gallery.com/uploads/posts/534366-poker.jpg");
    background-size: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top: 0px;
    }
    .box {
    text-align: center;
    width: 450px;
    height: 450px;
    background: #d9d9d9;
    font-family: 'Noto Sans';
    src: url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap");

    }
    .New{
        display: flex; 
        background-color: red;
        margin-top: 0px;
        font-family: 'Noto Sans';
        src: url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap");
    }
    body{
        padding: 0;
        margin: 0;
    }
</style>

<div class="New">
<div style="display: flex; background-color:red; margin: 0%;" class="mb-2">
<table border="1" cellpadding="3" cellspacing="0" class="border-color" style="border-color: white">
<tr>
<td style="width:120px; text-align:center; color:yellow; font-size:40px"><strong>BC</strong></td>
        <td style="width:120px; color: white; text-align:center"><h3>BloodyCoin</h3></td>
        <td style="width:1100px; text-align:center; font-size:40px; color:white"><strong>Tela de Login</strong></td>
        <td style="width:150px; text-align:center"><h3><a style="color:white; text-decoration:none" href="{{route('home.index')}}" id="Hom">Home</a></h3></td>
    </tr>
    </table>
    </div>
    </div>
    @error('error')
        <span>{{$message}}</span>
    @enderror
    <div class="container">
        <div class="box">
            <form action="{{route('login.store')}}" method="post">
                @csrf
                <h3>Login</h3>
                <input type="text" name="email" value="usuariotest@gmail.com.br">
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                <input type="password" name="password" value="12345">
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                    <p>Cadastre-se</p>
                <button type="submit">Login</button>
            </form>
        </div>
    </div> 
@endsection
