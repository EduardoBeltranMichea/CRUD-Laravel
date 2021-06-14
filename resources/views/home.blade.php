@extends('layouts.app')

@section('content')
<div class="indicators">
    <p class="h1">MENU</p>
   
</div>
<div class="container-admin">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ url('pessoa') }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-user"></i>
                <p class="h3">Pessoa</p>
            </div></a>
        </div>
        <div class="col-md-6
        ">
            <a href="{{ url('cidade') }}" style="text-decoration: none;"><div class="card-dashboard">
                <i class="fas fa-city"></i>
                <p class="h3">Endereço</p>
            </div></a>
        </div>
    </div>
    <div class="copyright-dashboard">
      
    </div>
</div>
@endsection
