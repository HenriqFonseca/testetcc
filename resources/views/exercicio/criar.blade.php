<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-md">
        <h1>adicionar exercicio</h1>
        <form action="/adicionar" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome" class="form-label">Nome do exercicio:</label>
                    <input type="text" name="nome" class="form-control" placeholder="digite um nome">
                    <div class="mb-3 form-check">
                        <input type="checkbox" for="" name="perna" value="1" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">Perna</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="triceps" value="1" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">triceps</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="biceps" value="1" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">Biceps</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="ombro" value="1" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">Ombro</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="abdomen" value="1" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck1">abdomen</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>