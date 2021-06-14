@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">cidade</p>
        <p class="h5">cidade / <a href="#">editcidade</a></p>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ url('cidade/updatecidade/'.$cidade->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>nome pessoa</label>
                            <select name="pessoa_id" class="form-control">
                                <option value="{{ $cidade->pessoa->id }}" style="background-color: #111;color: #fff;">{{ $cidade->pessoa->nome }}</option>
                                @foreach($pessoa as $res)
                                <option value="{{ $res->id }}">{{ $res->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="nome" placeholder="nome" class="form-control" value="{{ $cidade->nome }}">
                        </div>
                        <div class="form-group">
                            <label>cep</label>
                            <input type="text" name="cep" class="form-control" required value="{{ $cidade->cep }}">
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