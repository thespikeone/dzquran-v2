<?php
$url_root = 'https://'.$_SERVER['SERVER_NAME'].'/';
try{
    if(!empty($_GET['url'])){
        $url = explode("/", filter_var($_GET['request'],FILTER_SANITIZE_URL));   
        include('config/routes.php');
    }elseif(empty($_GET['url'])){
        include 'home.php';
    }else{
        include '404.php';
    }
}catch(Exception $e){
    $erreur =[
        "message" => $e->getMessage(),
        "code"=> $e->getCode()
    ];
    print_r($erreur);
}
?>
