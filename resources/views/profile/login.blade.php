<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profilecss/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <style>
        .new-container{
            display: flex;
            flex-direction: column;
            width: 430px;
        }
    </style>
    <div class="new-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)

            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <div class="wrapper">
            <div class="cadastro">


                <form class="form-signin" method="POST" action="{{ route('auth2') }}">
                    @csrf
                    <h2 class="form-signin-heading">Insira seu cadastro</h2>
                    <br>
                    <input type="text" class="input" name="cpf" placeholder="CPF" autofocus="" />
                    <br>
                    <input type="password" class="input" name="password" placeholder="Senha" />
                    <br>
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
            </a>
                </div>
                <div class="drops">
                    <div class="drop drop-1"></div>
                    <div class="drop drop-2"></div>
                    <div class="drop drop-3"></div>
                    <div class="drop drop-4"></div>
                    <div class="drop drop-5"></div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </div>

        </body>
