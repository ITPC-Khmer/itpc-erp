<?php

function nbs($n = 1)
{
    return str_repeat('&nbsp;', $n);
}

function _t($txt)
{
    return Glb::translate($txt);
}

function get_ses_lang()
{
    return session('lang') ? session('lang') : 'kh';
}

function highlight($text, $words)
{

    if (trim($words) != '') {
        $w = preg_split('/\s+/', $words);//explode(' ', $words);
        return str_highlight($text, $w, null, '<b><span class="search-highlight">\1</span></b>');
    } else {
        return $text;
    }
}

function active_url($page, $active = 'active')
{
    //$path = app('request')->path();

    if (app('request')->fullUrl() == url($page))
        return $active;

    /*if (str_contains($path, $page))
        return $active;*/

    return '';
}