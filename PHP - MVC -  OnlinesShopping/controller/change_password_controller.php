<?php
    include "../model/utility.php";
    include "../model/action.php";
    session_start();
    if(isset($_POST["change_password"])){
        if(!validatePassword($_POST["new_password"])){
            $messageChangePassword = "Password ít nhất 6 ký tự, phải chứa ký tự tin hoa và ký tự đặc biệt!";
        }
        if($_POST["new_password"] != $_POST["new_password_repat"]){
            $messageChangePassword = "Mật khẩu mới không trùng khớp!";
        }
        if(!isLogin($_COOKIE["username"], $_POST["old_password"])){
                $messageChangePassword = "Mật khẩu cũ không chính xác!";
        }
        if((strlen($_POST["old_password"]) == 0) || (strlen($_POST["new_password"]) == 0) || (strlen($_POST["new_password_repat"]) == 0)){
            $messageChangePassword = "Mật khẩu không được để trống!";
        }
        if(!isset($messageChangePassword)){
            if(changePasswordUserInfo($_COOKIE["username"], $_POST["old_password"], $_POST["new_password"])){
                $messageChangePassword = "Đổi mật khẩu thành công!";
            }
            else{
                $messageChangePassword = "Có lỗi khi đổi mật khẩu, vui lòng thử lại sau!";
                }
            }
        }
    if(isset($_POST["back"])){
        header("location: profile_controller.php");
    }
    include "../view/change_password_view.php";
?>