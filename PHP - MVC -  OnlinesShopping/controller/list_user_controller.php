<?php
    include "../model/action.php";
    session_start();
    $userInfos = getUserInfos();
    if(isset($_POST["back"])){
        header("location: profile_controller.php");
    }
    include "../view/list_user_view.php";
?>