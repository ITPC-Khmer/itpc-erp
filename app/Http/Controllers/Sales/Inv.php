<?php
namespace App\Http\Controllers\Sales;

use App\Helpers\Glb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Inv extends Controller
{

    function save(Request $request)
    {
        $image = $request->file('image_url');

        $image_url = '#';
        if($request->hasFile('image_url'))
        {
            $image_url = Glb::resize($image);
        }

        $post = new Post();

        $post->title = $request->title;

        $post->image_url = $image_url;

        if($post->save())
        {

        }

    }
    //
    function index(Request $request)
    {
        $files = $request->file('files');
        if($files) {
            $json = Glb::upload($files, true);
            return response()->json($json);
        }else{
            return response()->json([]);
        }
    }

    function delete($img)
    {
        Glb::deleteFile($img,true);
    }

    function test1()
    {
        return 'H<script>
                     $(function() {
                       function a() {
                      alert("aa");
                    }
                    a();
             });
</script>';
    }

    function test2()
    {
        return 'H2<script>
                     $(function() {
                       function a() {
                      alert("b");
                    }
                    a();
             });
</script>';
    }

         function test3()
    {
        return 'H3<script>
            
            a();
</script>';


    }





}
