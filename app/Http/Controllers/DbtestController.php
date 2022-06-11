<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;
use Illuminate\Http\Request;

class DbtestController extends Controller {

public static function getData()
{
    $data = DB::select('select * from users');

    return $data;
}

public function putData(Request $request)
{
dd($request->all());
}

}