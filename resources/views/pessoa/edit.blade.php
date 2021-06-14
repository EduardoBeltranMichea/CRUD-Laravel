@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">pessoa</p>
        <p class="h5">pessoa / <a href="#">cadastropessoa</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="img-wrapper">
                        <img src="{{ asset('pessoas_img/'.$pessoa->pic) }}">
                    </div>
                    <form method="POST" action="{{ url('pessoa/updatepessoa/'.$pessoa->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nome</label>
                            <textarea style="height: 100px;" class="form-control" id="nome" placeholder="nome" required name="nome">{{ $pessoa->nome }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Cpf</label>
                            <input type="text" name="cpf" maxlength="15" placeholder="cpf" class="form-control" value="{{ $pessoa->cpf }}">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="pic" class="form-control" value="{{ $pessoa->pic }}">
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Alterar</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection