<?php

use Illuminate\Support\Facades\Config;

use function PHPUnit\Framework\returnValue;

if( !function_exists('assets_base') ){
    function assets_base(){


        $env = Config::get('app.env');

        return '';


        // if($env == 'local'){
        //     return '';
        // }

        // return '/public';

    }
}
