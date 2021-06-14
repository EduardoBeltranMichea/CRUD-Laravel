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
                    <form method="POST" action="{{ route('pessoa_save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nome</label>
                            <textarea style="height: 100px;" class="form-control" id="nome" placeholder="nome" required name="nome"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cpf</label>
                            <input type="text" name="cpf" placeholder="cpf" class="form-control"  maxlength="15">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="pic" class="form-control" required>
                        </div>
                        <div class="action-form">
                            <button type="submit" class="btn btn-primary borderrad">Cadastrar</button>
                        </div>
                    </form>
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>