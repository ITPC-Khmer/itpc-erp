<?php
Route::get('/', function () {
    return view('welcome');
});

foreach (G::UrlList() as $group => $routes){
    Route::group(['prefix' => strtolower($group),'namespace' => $group],
        function() use ($routes) {

            foreach ($routes as $route)
            {
                if($route['m'] == 'get'){
                    Route::get($route['u'],function () use ($route){
                        dd(DB::table('migrations')->get());
                        return $route;
                    });
                }elseif($route['m'] == 'post'){
                    Route::post($route['u'],function () use ($route){
                        return $route;
                    });
                }elseif($route['m'] == 'put'){
                    Route::put($route['u'],function () use ($route){
                        return $route;
                    });
                }elseif($route['m'] == 'patch'){
                    Route::patch($route['u'],function () use ($route){
                        return $route;
                    });
                }elseif($route['m'] == 'delete'){
                    Route::delete($route['u'],function () use ($route){
                        return $route;
                    });
                }else{
                    Route::any($route['u'],function () use ($route){
                        return $route;
                    });
                }

            }


        }
    );
}




