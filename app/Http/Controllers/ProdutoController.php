<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
   public function index()
   {
    echo 'ok';
   }


   public function show($id)
   {
    echo 'o di é: '. $id;
   }

}
