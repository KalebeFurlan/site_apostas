@extends('master')
@section('content')
<div style="display: flex; background-color:red; margin: 0%;" class="mb-2">
        <h3 class="textin">BloodyCoin | H<h3>
        <a href="{{route('home.index')}}">ome</a>
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
    .textin{
        text-decoration-color: white;
    }
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
    background: #fff;
    }
</style>
