<?php
$name=NULL;
session_start();
if (isset($_GET['name'])){
    echo "Hello ". $_GET["name"];
    $_SESSION['name'] = $_GET['name'];
}  
elseif(isset($_SESSION['name'])) {
    echo "Hello ". $_SESSION['name'];
}
else{
    echo "Hello platypus";
}
?> 