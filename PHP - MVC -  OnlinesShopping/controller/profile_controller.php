<?php
    include "../model/action.php";
    session_start();
    if(isset($_GET["profile-user"])){
        $userInfo = getUserInfoByEmail($_GET["profile-user"]); 
    }
    else{
        $userInfo = getUserInfoByEmail($_COOKIE["username"]);
    }
    include "../view/profile_view.php";
?>