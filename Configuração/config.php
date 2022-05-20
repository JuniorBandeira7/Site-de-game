<?php
#Caminhos absolutos
$pastaInterna="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    $barra="";
}else{
    $barra="/";
}
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Acesso ao db
define('HOST',"localhost");
define('DB',"gamelistdb");
define('USER',"root");
define('PASS',"");

?>