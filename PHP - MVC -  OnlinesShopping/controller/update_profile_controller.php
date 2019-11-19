<?php
    include "../model/utility.php";
    include "../model/action.php";
    session_start();
    if(isset($_POST["update"])){
    if(!validateAddress($_POST["address1"]) || !validateAddress($_POST["address2"])){
        $messageUpdate = "Địa chỉ không được để trống!";
    }
    if(!validateMobile($_POST["mobile"])){
        $messageUpdateSignin = "Vui lòng nhập mobile hợp lệ!";
        if(strlen($_POST["mobile"]) == 0){
            $messageUpdate = "Mobile không được để trống!";
        }
    }
    if(!validateName($_POST["l_name"])){
        $messageUpdate = "Vui lòng nhập last name hợp lệ!";
        if(strlen($_POST["l_name"]) == 0){
            $messageUpdate = "Last name không được để trống!";
        }
    }
    if(!validateName($_POST["f_name"])){
        $messageUpdate = "Vui lòng nhập first name hợp lệ!";
        if(strlen($_POST["f_name"]) == 0){
            $messageUpdate = "First name không được để trống!";
        }
    }
    if(!isset($messageUpdate)){
        $_POST["f_name"] = chuanHoaChuoi($_POST["f_name"]);
        $_POST["l_name"] = chuanHoaChuoi($_POST["l_name"]);
        if(updateUserInfo($_COOKIE["username"], $_POST["f_name"], $_POST["l_name"], $_POST["mobile"], $_POST["address1"], $_POST["address2"])){
            $messageUpdate = "Cập nhật thành công!";
        }
        else{
                $messageUpdate = "Có lỗi khi cập nhật thông tin, vui lòng thử lại sau!";
            }
        }
    }
    if(isset($_POST["back"])){
        header("location: profile_controller.php");
    }
    include "../view/update_profile_view.php";
?>