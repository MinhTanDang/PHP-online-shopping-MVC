<?php
    include "../model/utility.php";
    include "../model/action.php";
    session_start();
    if(isset($_POST["delete_user"])){
        if(!validateMail($_POST["email"])){
            $messageDeleteUser = "Vui lòng nhập email hợp lệ!";
            if(strlen($_POST["email"]) == 0){
                $messageDeleteUser = "Email không được để trống!";
            }
        }
        else{
            if(deleteUserInfo($_POST["email"])){
                $messageDeleteUser = "Xóa tài khoản thành công!";
            }
            else{
                $messageDeleteUser = "Không tìm thấy email cần xóa!";
            }
        }
    }
    if(isset($_POST["back"])){
        header("location: profile_controller.php");
    }
    include "../view/delete_user_view.php";
?>



                