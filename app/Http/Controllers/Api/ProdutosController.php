<?php

namespace Produtos\Http\Controllers\Api;

use Produtos\Produto;
use Illuminate\Http\Request;
use Produtos\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function show($id)
    {
        return Produto::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return $produto;
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return $produto;
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return '';
    }
}
