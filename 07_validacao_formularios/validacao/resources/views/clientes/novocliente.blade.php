<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <form action="/cliente" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="idNome">Nome do Cliente</label>
                            <input type="text" class="form-control {{$errors->has('nome')?'is-invalid':''}}" id="idNome" name="nome" placeholder="Nome do Cliente">
                            @if($errors->has('nome'))
                                <div class="invalid-feedback">
                                    {{$errors->first('nome')}}
                                </div>

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="idIdade">Idade</label>
                            <input min="16" max="150" type="number" class="form-control" id="idIdade" name="idade" placeholder="Idade do Cliente">
                        </div>
                        <div class="form-group">
                            <label for="idEndereco">Endereço</label>
                            <input type="text" class="form-control" id="idEndereco" name="endereco" placeholder="Endereço do Cliente">
                        </div>
                        <div class="form-group">
                            <label for="idEmail">E-mail</label>
                            <input type="email" class="form-control" id="idEmail" name="email" placeholder="E-mail do Cliente">
                        </div>
                        <button type="submit" class="btn btn-primary btn sm">Salvar</button>
                        <button type="cancel" class="btn btn-danger btn sm">Cancelar</button>
                    </form>
                </div>
                <!-- Validação Laravel -->
                @if($errors->any())
                    <div class="card-footer">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</main>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
