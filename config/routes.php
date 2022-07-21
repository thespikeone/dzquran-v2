<?php 
switch ($url[0]) {
case 'home':
    if (empty($url[1])) {
        include 'home.php';
    } else {
        include 'home.php';
    }
break;
default:
    include '404.php';
break;
}
?>
