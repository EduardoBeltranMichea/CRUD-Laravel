@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">cidade</p>
        <p class="h5">cidade / <a href="#">tambahcidade</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('cidade_save') }}">
                        @csrf
                        <div class="form-group">
                            <label>Nome pessoa</label>
                            <select name="pessoa_id" class="form-control">
                                <option value="" style="background-color: #111;"></option>
                                @foreach($pessoa as $res)
                                <option value="{{ $res->id }}">{{ $res->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="nome" placeholder="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Cep</label>
                            <input type="text" name="cep" class="form-control" required>
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