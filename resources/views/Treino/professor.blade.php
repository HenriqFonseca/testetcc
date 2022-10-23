<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="">Nome Treino</label>
            <input type="text" name="nome" id="">
            <label for="">séries:</label>
            <input type="number" name="series" id="">
            <label for="">Repetições</label>
            <input type="number" name="repeticoes" id="">
            <label for=""></label>
        </form>

            
            <h2>PERNAS</h2>
                
            @foreach ($treinos as $treino)
            @if ($treino->exercicio->perna)
                
                Nome do Aluno: {{ $treino->user->name }}  -  
                Nome Exercício:{{ $treino->exercicio->nome }}<br>
            @endif
            @endforeach
            <h2>Abdomen</h2>
            @foreach ($treinos as $treino)
                @if ($treino->exercicio->abdomen == 1 )
                Nome do Aluno: {{ $treino->user->name }}  -  
                Nome Exercício:{{ $treino->exercicio->nome }}
                @endif
            @endforeach
        {{-- @foreach ($treinos as $treino)
        <h2> @if ($treino->exercicio->triceps == 1)
            Costas
        @elseif ($treino->exercicio->perna == 1)
            Pernas
        @elseif ($treino->exercicio->abdomen == 1)
            Abdomens
        @endif</h2>
        Nome do Aluno: {{ $treino->user->name }}  -  
        Nome Exercício:{{ $treino->exercicio->nome }}
        <br>
        @endforeach --}}
    </div>
</body>
</html>