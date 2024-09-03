<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Produto $produtos)
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        produto::create([
            'sku'=>$request->sku,
            'nome'=>$request->nome,
            'foto'=>$request->file('foto')->store('comprovantes', 'public'),

        ]);
        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    {
        return view('produtos.edit', ['produto' =>$produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //dd($produto);
        $caminhoFoto = $produto->foto;
        if($request->hasFile('foto')){
            $caminhoFoto = $request->file('foto')->store('comprovantes', 'public');
        }
        $produto->fill([
            'sku' => $request->sku,
            'nome' => $request->nome,
            'foto' => $caminhoFoto,

        ]);
        $produto->save();
        return to_route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        //
    }
}
