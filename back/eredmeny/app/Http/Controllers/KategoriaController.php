<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    function kategoria(){
        return DB::table('kategorias')->get();
    }
}
