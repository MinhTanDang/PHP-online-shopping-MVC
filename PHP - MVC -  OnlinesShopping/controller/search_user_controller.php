<?php
    include "../model/action.php";
    session_start();
    if(isset($_POST["search"])){
        if(strlen($_POST["info_user"]) == 0){
            $messageSearchUserInfo = "Vui lòng nhập thông tin cần tìm!";
        }
        else{
            $userInfos = getUserInfosByInfo($_POST["info_user"]);
            if(count($userInfos) == 0){
                $messageSearchUserInfo = "Không tìm thấy khách hàng theo thông tin cần tìm!";
            }
        }
    }
    if(isset($_POST["back"])){
        header("location: profile_controller.php");
    }
    include "../view/search_user_view.php";
?>