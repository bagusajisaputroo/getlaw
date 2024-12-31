<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use Illuminate\Http\Request;

class lembagaController extends Controller
{
   public function index(){
    $lembaga = Lembaga::all();
    return view('lembaga', compact('lembaga'));
   }
}
