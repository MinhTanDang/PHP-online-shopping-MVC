<?php
    include "../model/action.php";
    session_start();
    if(isset($_GET["index-delete"])){
        $index = $_GET["index-delete"];
        unset($_SESSION["cart"][$index]);
    }
    include "../view/cart_view.php";
?>