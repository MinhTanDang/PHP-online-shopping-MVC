<?php
    include "../model/utility.php";
    include "../model/action.php";
    session_start();
    if(isset($_POST["signup"])){
        $fName = $_POST["f_name"];
        $lName = $_POST["l_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        //
        if(!validateAddress($address1) && !validateAddress($address2)){
            $messageSignUp = "Địa chỉ không được để trống!";
        }
        if(!validateMobile($mobile)){
            $messageSignUpSignin = "Vui lòng nhập mobile hợp lệ!";
            if(strlen($mobile) == 0){
                $messageSignUp = "Mobile không được để trống!";
            }
        }
        if(!validatePassword($password)){
            $messageSignUp = "Password ít nhất 6 ký tự, phải chứa ký tự tin hoa và ký tự đặc biệt!";
            if(strlen($password) == 0){
                $messageSignUp = "Password không được để trống!";
            }
        }
        if(!validateMail($email)){
            $messageSignUp = "Vui lòng nhập email hợp lệ!";
            if(strlen($email) == 0){
                $messageSignUp = "Email không được để trống!";
            }
        }
        if(!validateName($lName)){
            $messageSignUp = "Vui lòng nhập last name hợp lệ!";
            if(strlen($lName) == 0){
                $messageSignUp = "Last name không được để trống!";
            }
        }
        if(!validateName($fName)){
            $messageSignUp = "Vui lòng nhập first name hợp lệ!";
            if(strlen($fName) == 0){
                $messageSignUp = "First name không được để trống!";
            }
        }
        if(validateName($fName) && validateName($lName) && validateMail($email) && validatePassword($password) && validateMobile($mobile) && validateAddress($address1) && validateAddress($address2)){
            $fName = normalizeString($fName);
            $lName = normalizeString($lName);
            $password = md5($password);
            if(!isExistUserInfo($email)){
                if(insertIntoUserInfo($fName, $lName, $email, $password, $mobile, $address1, $address2)){
                    $messageSignUp = "Đăng ký thành công!";
                }
                else{
                    $messageSignUp = "Có lỗi khi đăng ký tài khoản, vui lòng thử lại sau!";
                }
            }
            else{
                $messageSignUp = "Email đã tồn tại vui lòng thử email khác!";
            }
        }
    }
    include "../view/sign_up_view.php";
?>