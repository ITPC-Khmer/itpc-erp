<?php

namespace App\Http\Controllers\Stocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemCategoryController extends Controller
{
    function index(){
        return view('stocks.item-category.index');
    }

    function form(){
        return 'index2';
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
