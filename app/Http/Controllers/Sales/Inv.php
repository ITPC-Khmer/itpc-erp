<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv extends Controller
{
    //
    function index(Request $request)
    {
        $files = $request->file('files');

        $json = array(
            'files' => array()
        );

        foreach ($files as $file) {

            $filename = $file->getClientOriginalName();//. "." . $file->getClientOriginalExtension();

            $json['files'][] = array(
                'name' => $filename,
                'size' => $file->getSize(),
                'type' => $file->getMimeType(),
                'url' => '/uploads/files/' . $filename,
                'deleteType' => 'DELETE',
                'deleteUrl' => '/deleteFile/' . $filename,
            );

            // $upload = $file->move( public_path().'/uploads/files', $filename );


        }

        return response()->json($json);
    }

}
