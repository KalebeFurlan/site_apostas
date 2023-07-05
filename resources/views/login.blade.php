@extends('master')
@section('content')
    <div class="board">
        <img src="C:\Users\Acer\Documents\site de aposta\site_apostas\pixil-frame-0.png">
        <h3 class="textin">BloodyCoin | <h3>
        <a class="texti" href="{{route('home')}}">Home</a>
    </div>
    @error('error')
        <span>{{$message}}</span>
    @enderror
    <div class="container">
        <div class="box">
            <form action="{{route('login.store')}}" method="post">
                @csrf
                <input type="text" name="email" value="usuariotest@gmail.com.br">
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                <input type="password" name="password" value="12345">
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
<style>
    .container {
    width: 100vw;
    height: 100vh;
    background: #6C7A89;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    }
    .box {
    width: 300px;
    height: 300px;
    background-image: url(https://vistapointe.net/images/poker-5.jpg);
    }
    .textin{
        color: white;
        margin-right: 5px;
        margin-left: 5px;
    }
    .board{
        display: flex;
        background-color:red;
    }
</style>
