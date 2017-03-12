<?php
namespace App\Http\Controllers\Sales;

use App\Helpers\Glb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv extends Controller
{
    //
    function index(Request $request)
    {
        $files = $request->file('files');
        $json = Glb::upload($files, true);
        return response()->json($json);
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
