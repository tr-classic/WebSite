<?php

if($_SERVER['REQUEST_URI'] == "/"){
    header("Location: home");
    die() ;
}

if(strpos($_SERVER['REQUEST_URI'], "/api") != false){
  require "./Views/Common/layout.php" ;
  die() ;
}


function RenderBody(){
  if(isset($GLOBALS['PAGE']) && $GLOBALS['PAGE'] != ""){
    $_load = $_SERVER['DOCUMENT_ROOT'] . "/Views/" . $GLOBALS['PAGE'] . ".php" ;
    if(file_exists($_load)){
      require $_load;
      return ;
    }
  }
  require($_SERVER['DOCUMENT_ROOT'] . "/Views/error.php") ;
}

$PAGE = substr($_SERVER['REQUEST_URI'], 1) ;
$PAGE = str_replace("/",".",$PAGE) ;

require "./Views/Common/layout.php" ;
