<?php

namespace App\Http\Controllers\Stocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemCategoryController extends Controller
{
    function index(Request $request){

        $data['title'] = $request->input('title','');
        $data['description'] = $request->input('description','');
        return view('stocks.item-category.index',$data);
    }

    function form(Request $request){
        $data[''] = '';
        return view('stocks.item-category.form');
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
