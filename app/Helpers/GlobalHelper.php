<?php
namespace App\Helpers;

class GlobalHelper
{
    static  $UrlListType = [
        1 => 'Transaction', 2 => 'Report', 3 => 'Setting'
    ];

    // note : m = method , u = url, c = controller@action,
    // t = type (1 = transaction, report = 2, setting = 3)
    static function UrlList(){
        $list = [
            'Sales' => [
                ['m' => 'get','u' => 'x','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x1','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x2','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x3','c' => '','t' => 2,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x4','c' => '','t' => 3,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x5','c' => '','t' => 3,'txt' => 'xxx'],
            ],
            'Purchases' => [
                ['m' => 'get','u' => 'x','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x1','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x2','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x3','c' => '','t' => 2,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x4','c' => '','t' => 3,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x5','c' => '','t' => 3,'txt' => 'xxx'],
            ],
            'Admin' => [
                ['m' => 'get','u' => 'x','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x1','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x2','c' => '','t' => 1,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x3','c' => '','t' => 2,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x4','c' => '','t' => 3,'txt' => 'xxx'],
                ['m' => 'get','u' => 'x5','c' => '','t' => 3,'txt' => 'xxx'],
            ],

        ];

        return $list;
    }


}