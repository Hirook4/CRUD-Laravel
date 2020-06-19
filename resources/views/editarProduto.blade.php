<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}" title="Página Inicial" style="margin-top: -3px">Pagina Inicial</a>
        </div>
    </nav>
    <div id="line-one">
        <div class="container">

            <div class="row">
                <br>
                <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
                <br>
                <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                    {!! method_field('put') !!}
                    {{ csrf_field() }}

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" value="{{$product->nome}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" name="quantidade" class="form-control" value="{{$product->quantidade}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" class="form-control" value="{{$product->preco}}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="reset" class="btn btn-default" id="black">
                            Limpar
                        </button>
                        <button type="submit" class="btn btn-primary" id="">
                            Alterar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>