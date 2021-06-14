<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;
use App\Pessoa;

class CidadeController extends Controller
{
    public function index(){
    	$data['cidade'] = cidade::all();
    	return view('cidade.index')->with($data);
    }
    public function add(){
    	$data['pessoa'] = pessoa::all();
    	return view('cidade.add')->with($data);
    }
    public function save(Request $r){
    	$cidade = new cidade;
    	$cidade->pessoa_id = $r->input('pessoa_id');
    	$cidade->nome = $r->input('nome');
    	$cidade->cep = $r->input('cep');

    	$cidade->save();
    	return redirect()->route('cidade_home');
    }
    public function edit($id){
    	$data['cidade'] = cidade::find($id);
    	$data['pessoa'] = pessoa::all();
    	return view('cidade.edit')->with($data);
    }
    public function update(Request $r, $id){
    	$cidade = cidade::find($id);
    	$cidade->pessoa_id = $r->input('pessoa_id');
    	$cidade->nome = $r->input('nome');
    	$cidade->cep = $r->input('cep');

    	$cidade->save();
    	return redirect()->route('cidade_home');
    }
    public function delete($id){
    	cidade::find($id)->delete();
    	return redirect()->route('cidade_home');
    }
}
