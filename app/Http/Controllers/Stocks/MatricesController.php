<?php

namespace App\Http\Controllers\Stocks;

use App\Model\Stock\Matrix;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatricesController extends Controller
{
    function index(Request $request){

        $data['title'] = $request->input('title','');
        $data['description'] = $request->input('description','');
        $data['status'] = $request->input('description','');
        $data['result'] = Matrix::paginate(12);
        return view('stocks.matrices.index',$data);
    }

    function form(){
        return view('stocks.matrices.form');
    }

    function save(){
        return 'index3';
    }

    function edit(){
        return 'index4';
    }

    function delete(){
        return 'index5';
    }
}
