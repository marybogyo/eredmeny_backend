<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    function tesztek(){
        return DB::table('teszts')->select('*')->get();
    }

    function tesztekKat($id){
        return Db::table('teszts as t')
                ->where('kategoriaId', '=', $id)
                ->get();
    }
}
