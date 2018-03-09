<?php

namespace Produtos\Http\Controllers;

use Produtos\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        return view('admin.produtos.index');
    }
}
