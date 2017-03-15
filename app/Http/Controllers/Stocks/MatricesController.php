<?php

namespace App\Http\Controllers\Stocks;

use App\Model\Stock\Matrix;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MatricesController extends Controller
{
    function index(Request $request){

        $data['title'] = $request->input('title','');
        $data['description'] = $request->input('description','');
        $data['status'] = $request->input('description','');
        $data['result'] = Matrix::paginate(12);
        return view('stocks.matrices.index',$data);
    }

    function form(Request $request){
        $id = $request->id;
        $matrices = null;
        if ($id != 0){
            $matrices = Matrix::find($id);
        }
        return view('stocks.matrices.form',['result'=>$matrices]);
    }

    function save(Request $request){
        $this->validate($request,[
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $submit_type = $request->submit-0;
        $id = $request->id;

        if ($id != 0){
            $matrices = Matrix::find($id);
        }else{
            $matrices = new Matrix();
        }

        $matrices->title = $request->title;
        $matrices->description = $request->description;
        $matrices->status = $request->status;
        $matrices->user_id = 1;

        if ($matrices->save()){
            if ($submit_type == 0)return redirect('/stocks/matrices');
            if ($submit_type == 1)return redirect('/stocks/matrices-form');
        }else{
            return 'aaaa';
        }

    }


    function delete(Request $request)
    {
        $affected = 0;
        if ($request->ajax()){
            $id = $request->id-0;

            if(Matrix::find($id)->delete()){}
                $affected = 1;
            return response()->json(['affected' => $affected]);
        }else{
            return response()->json(['affected' => $affected]);
        }
    }
}
