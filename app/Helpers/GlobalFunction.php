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

function get_title_search($name='',$value='')
{
    return '<div class="input-group">
                <div class="input-icon"><i class="fa fa-question-circle"></i>
                    <input data-name="'.$name.'" value="'.$value.'" id="'.$name.'" class="head-search-input form-control '.$name.'" type="text" name="'.$name.'" placeholder="'.$name.'"> 
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-success head-search-th" type="button"><i class="fa icon-magnifier"></i></button>
                </span>
            </div>';
}

function ajax_delete(){

}