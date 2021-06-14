<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    public function index(){
    	$data['pessoa'] = pessoa::orderby('id', 'desc')->get();
    	return view('pessoa.index')->with($data);
    }
    public function add(){
    	return view('pessoa.add');
    }
    public function save(Request $r){
    	$pessoa = new pessoa;
    	$pessoa->nome = $r->input('nome');
    	$pessoa->cpf = $r->input('cpf');
    	$pic = $r->file('pic');
    	$pessoa->pic = $pic->getClientOriginalName();
    	$pic->move(public_path('pessoas_img'),$pic->getClientOriginalName());

    	$pessoa->save();


    	return redirect()->route('pessoa_home');
    }
    public function edit($id){
    	$data['pessoa'] = pessoa::find($id);
    	return view('pessoa.edit')->with($data);
    }
    public function update(Request $r, $id){
    	$pessoa = pessoa::find($id);
    	$pessoa->nome = $r->input('nome');
    	$pessoa->cpf = $r->input('cpf');
    	$pic = $r->file('pic');
        $pessoa->pic = $pic->getClientOriginalName();
        $pic->move(public_path('pessoas_img'),$pic->getClientOriginalName());

        $pessoa->save();


        return redirect()->route('pessoa_home');
    }
    public function delete($id){
    	pessoa::find($id)->delete();
    	return redirect()->route('pessoa_home');
    }
}
