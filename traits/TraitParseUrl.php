<?php

namespace Traits;

trait TraitParseUrl{
    #criar uma array com a url digitada pelo usuario
    public static function parseUrl($par=null){
        $url=explode("/", rtrim($_GET['url'],FILTER_SANITIZE_URL));
        if($par == null){
            return $url;
        }else{
            return$url[$par];
        }
    }
}

?>