<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profilecss/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="cadastro">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-signin" method="POST" action="{{ route('auth2') }}">
                  @csrf
                    <h2 class="form-signin-heading">Insira seu cadastro</h2>
                    <br>
                    <input type="text" class="input" name="cpf" placeholder="CPF" autofocus="" />
                    <br>
                    <input type="password" class="input" name="password" placeholder="Senha" />
                        <br>
                        <div>
                          
                        </div>
                        <button class="login-button">
                            Fazer Login
                        </button><br>
                       
                </form>
                <ul class="nav-item-box">
                    <a class="forgot-password" href="">
                        Esqueci minha senha
                    </a>
                </ul>
            </div>
            <a href="{{ route('home.index') }}"class="logo-box">
                <img class="img" src="img/logo-vertical.png" alt="">
                <a>
        </div>
        <div class="drops">
            <div class="drop drop-1"></div>
            <div class="drop drop-2"></div>
            <div class="drop drop-3"></div>
            <div class="drop drop-4"></div>
            <div class="drop drop-5"></div>
        </div>
    </div>
</body>
