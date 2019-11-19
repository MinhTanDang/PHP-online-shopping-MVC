<?php
    function validateName($name){
        $name = strtolower($name);
        if(strlen($name) != 0){
            for ($i = 0; $i < strlen($name); $i++){
                if(($name[$i] < "a" || $name[$i] > "z")){
                    return false;
                }
            }
            return true;
        }
        return false;
    } //Name không được rỗng, chỉ chứa các ký tự từ "A" - "Z" hoặc từ "a" - "z".
    //
    function validateMail($mail){
        $count = 0;
        for ($i = 0; $i < strlen($mail); $i++){
            if($mail[$i] == "@"){
                $count++;
            }
        }
        return ($count == 1);
    } //Mail chứa 1 ký tự "@".
    //
    function validateMobile($mobile){
        //Note
        return ((strlen($mobile) == 10) && ($mobile[0] == "0"));
    } //Mobile gồm 10 ký tự và bắt đầu bằng ký tự "0".
    //
    function validateLengthPassword($password){
        return (strlen($password) >= 6);
    } //Password phải có độ dài lớn hơn hoặc bằng 6.
    //
    function validateLowerPassword($password){
        $count = 0;
        for ($i = 0; $i < strlen($password); $i++){
            if($password[$i] >= "A" && $password[$i] <= "Z"){
                $count++;
            }
        }
        return ($count >= 1);
    } //Password phải chứa ít nhất 1 ký tự in hoa.
    //
    function validateSpecialPassword($password){
        $count = 0;
        for ($i = 0; $i < strlen($password); $i++){
            if(!(($password[$i] >= "A" && $password[$i] <= "Z") || ($password[$i] >= "a" && $password[$i] <= "z") || ($password[$i] >= "0" && $password[$i] <= "9"))){
                $count++;
            }
        }
        return ($count >= 1);
    } //Password phải chứa ít nhất 1 ký tự đặc biệt.
    //
    function validatePassword($password){
        if(validateLengthPassword($password) && validateLowerPassword($password) && validateSpecialPassword($password)){
            return true;
        }
        return false;
    } //ValidatePassword
    //
    function validateAddress($address){
        return (strlen($address) > 0);
    } //Validate Address
    //
    function normalizeString($string){
        //Note
        $string = trim($string);
        return $string;
    } //Chuẩn hóa chuỗi
    //
?>