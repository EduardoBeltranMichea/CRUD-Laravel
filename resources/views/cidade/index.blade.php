@extends('layouts.app')

@section('content')
<div class="indicators">
    <div>
        <p class="h1">cidade</p>
        <p class="h5">cidade / <a href="siswa">home</a></p>
    </div>
    <div>
        <a href="cidade/cadastrocidade" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    </div>
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-12 table-wrap">
            <table class="table table-striped" style="margin-top: 20px;">
                <thead>
                    <tr class="bg-primary" style="color: #fff;">
                        <th scope="col">Nº</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Nome pessoa</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cidade as $res)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $res->nome }}</td>
                        <td>{{ $res->cep }}</td>
                        <td>{{ $res->pessoa->nome }}</td>
                        <td class="action-table">
                            <a href="{{ url('cidade/editcidade/'.$res->id) }}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{ url('cidade/excluircidade/'.$res->id) }}" onclick="return confirm('Excluir contato?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
