@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">pessoa</p>
        <p class="h5">pessoa / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="pessoa/cadastropessoa" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">Nº</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Foto pessoa</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pessoa as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->nome }}</td>
                        <td>{{ $res->cpf }}</td>
                        <td><img src="{{ asset('pessoas_img/'.$res->pic) }}" class="img-table"></td>
                        <td class="action-table">
                            <a href="{{ url('pessoa/editpessoa/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('pessoa/excluirpessoa/'.$res->id) }}" onclick="return confirm('Excluir contato?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
