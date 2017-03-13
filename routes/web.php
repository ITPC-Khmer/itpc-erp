<?php
Route::get('/', function () {
    return view('welcome');
});

foreach (Glb::urlList() as $group => $routes) {
    Route::group(['prefix' => strtolower($group),'namespace' => $group],
        function() use ($routes) {

            foreach ($routes as $route)
            {
                if($route['m'] == 'get'){
                    Route::get($route['u'], $route['c']);
                }elseif($route['m'] == 'post'){
                    Route::post($route['u'], $route['c']);
                }elseif($route['m'] == 'put'){
                    Route::put($route['u'], $route['c']);
                }elseif($route['m'] == 'patch'){
                    Route::patch($route['u'], $route['c']);
                }elseif($route['m'] == 'delete'){
                    Route::delete($route['u'], $route['c']);
                }else{
                    Route::any($route['u'], $route['c']);
                }
            }

        }
    );
}


Auth::routes();

Route::get('/home', 'HomeController@index');
