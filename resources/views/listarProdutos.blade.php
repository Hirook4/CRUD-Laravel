<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
    <script src="{{URL::asset('js/lightbox.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('/')}}" title="Página Inicial" style="margin-top: -3px">Pagina Inicial</a>
        </div>
    </nav>

    @if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif
    <div id="line-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="center">
                    <h1><b>Produtos</b></h1>
                    <br>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <br />

                <h4 id="center"><b>PRODUTOS CADASTRADOS ({{$total}})</b></h4>
                <h4 id="center"> <a href="{{route('product.create')}}" class=" btn btn-default"> <span class="glyphicon glyphicon-plus"></span> Adicionar Novo Produto</a></h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th id="center">Código</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Preço</th>
                                <th id="center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td id="center">{{$produto->id}}</td>
                                <td title="Nome">{{$produto->nome}}</td>
                                <td title="Quantidade" id="">{{$produto->quantidade}}</td>
                                <td title="Preço" id="">R$ {{$produto->preco}}</td>

                                <td id="center">
                                    <a href="{{route('product.edit', $produto->id)}}" data-toggle="tooltip" data-placement="top" title="Alterar"><i class="fa fa-pencil"></i></a>
                                    &nbsp;<form style="display: inline-block;" method="POST" action="{{route('product.destroy', $produto->id)}}" data-toggle="tooltip" data-placement="top" title="Excluir" onsubmit="return confirm('Deseja Apagar Esse Registro?')">
                                        {{method_field('DELETE')}}{{ csrf_field() }}
                                        <button type="submit" style="background-color: #fff">
                                            <a><i class="fa fa-trash-o"></i></a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>