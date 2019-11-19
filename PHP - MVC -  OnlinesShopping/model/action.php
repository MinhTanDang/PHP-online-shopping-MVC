<?php
    include "../model/object.php";
    function getBrands(){
        include "../model/db_connect.php";
        $query = "select* from `brand`";
        $runQuery = mysqli_query($connect, $query);
        $brands = array();
        $brand;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["brand_id"];
            $title = $row["brand_title"];
            $brand = new Brand($id, $title);
            array_push($brands, $brand);
        }
        mysqli_close($connect);
        return $brands;
    }
    //
    function getCarts(){
        include "../model/db_connect.php";
        $query = "select* from `cart`";
        $runQuery = mysqli_query($connect, $query);
        $carts = array();
        $cart;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["id"];
            $pId = $row["p_id"];
            $ipAdd = $row["ip_add"];
            $userId = $row["user_id"];
            $productTitle = $row["product_title"];
            $productImage = $row["product_image"];
            $qty = $row["qty"];
            $price = $row["price"];
            $totalAmount= $row["total_amount"];
            $cart = new Cart($id, $pId, $ipAdd, $userId, $productTitle, $productImage, $qty, $price, $totalAmount);
            array_push($carts, $cart);
        }
        mysqli_close($connect);
        return $carts;
    }
    //
    function getCategories(){
        include "../model/db_connect.php";
        $query = "select* from `categorie`";
        $runQuery = mysqli_query($connect, $query);
        $categories = array();
        $categorie;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["cat_id"];
            $title = $row["cat_title"];
            $categorie = new Categorie($id, $title);
            array_push($categories, $categorie);
        }
        mysqli_close($connect);
        return $categories;
    }
    //
    function getCustomerOrders(){
        include "../model/db_connect.php";
        $query = "select* from `customer_order`";
        $runQuery = mysqli_query($connect, $query);
        $customerOrders = array();
        $customerOrder;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["id"];
            $uId = $row["uid"];
            $pId = $row["pid"];
            $pName = $row["p_name"];
            $pPrice = $row["p_price"];
            $pQty = $row["p_qty"];
            $pStatus = $row["p_status"];
            $trId = $row["tr_id"];
            $customerOrder = new CustomerOrder($id, $uId, $pId, $pName, $pPrice, $pQty, $pStatus, $trId);
            array_push($customerOrders, $customerOrder);
        }
        mysqli_close($connect);
        return $customerOrders;
    }
    //
    function getProducts($start, $limit){
        include "../model/db_connect.php";
        $query = "select* from `product` limit $start, $limit";
        $runQuery = mysqli_query($connect, $query);
        $products = array();
        $product;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($products, $product);
        }
        mysqli_close($connect);
        return $products;
    }
    //
    function getReceivedPayments(){
        include "../model/db_connect.php";
        $query = "select* from `received_payment`";
        $runQuery = mysqli_query($connect, $query);
        $receivedPayments = array();
        $receivedPayment;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["id"];
            $uId = $row["uid"];
            $amt = $row["amt"];
            $trId = $row["tr_id"];
            $receivedPayment = new ReceivedPayment($id, $uId, $amt, $trId);
            array_push($receivedPayments, $receivedPayment);
        }
        mysqli_close($connect);
        return $receivedPayments;
    }
    //
    function getUserInfos(){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `email` != 'Admin'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            array_push($userInfos, $userInfo);
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //Get all objects array from OnlineShopping!

    function insertIntoBrand($title){
        include "../model/db_connect.php";
        $query = "insert into `brand` (`brand_title`) values ('$title')";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function insertIntoCart($pId, $ipAdd, $userId, $productTitle, $productImage, $qty, $price, $totalAmount){
        include "../model/db_connect.php";
        $query = "insert into `cart` (`p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, 'qty`, `price`, `total_amount`) values ($pId, '$ipAdd', $userId, '$productTitle', '$productImage', $qty, $price, $totalAmount)";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close();
        return ($runQuery == true);
    }
    //
    function insertIntoCategorie($title){
        include "../model/db_connect.php";
        $query = "insert into `categorie` (`cat_title`) values ('$title')";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function insertIntoCustomrOrder($uId, $pId, $pName, $pPrice, $pQty, $pStatus, $trId){
        include "../model/db_connect.php";
        $query = "insert into `customer_order` (`uid`, `pid`, `p_name`, `p_price`, `p_qty`, `p_status`, `tr_id`) values ($uId, $pId, '$pName', $pPrice, $pQty, '$pStatus', '$trId')";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function insertIntoProduct($cat, $brand, $title, $price, $desc, $image, $keywords){
        include "../model/db_connect.php";
        $query = "insert into `product` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) values ('$cat', '$brand', '$title', $price, '$desc', '$image', '$keywords')";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function insertIntoReceivedPayment($uId, $amt, $trId){
        include "../model/db_connect.php";
        $query = "insert into `received` (`uid`, `amt`, `tr_id`) values ($uId, $amt, $trId)";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function insertIntoUserInfo($firstName, $lastName, $email, $password, $mobile, $address1, $address2){
        include "../model/db_connect.php";
        $query = "insert into `user_info` (`first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) values ('$firstName', '$lastName', '$email', '$password', '$mobile', '$address1', '$address2')";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //Insert into all objects Onlineshopping!

    function getTotalRecord(){
        include "../model/db_connect.php";
        $query = "select* from `product`";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return $numRows;
    }
    //
    function getTotalRecordByKeywords($keywords){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_keywords` like '%$keywords%'";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return $numRows;
    }
    //
    function getTotalRecordByCat($cat){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_cat` = '$cat'";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return $numRows;
    }
    //
    function getTotalRecordByBrand($brand){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_brand` = '$brand'";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return $numRows;
    }
    //
    function getProductById($id){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_id` = $id";
        $runQuery = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
        $id = $row["product_id"];
        $cat = $row["product_cat"];
        $brand = $row["product_brand"];
        $title = $row["product_title"];
        $price = $row["product_price"];
        $desc = $row["product_desc"];
        $image = $row["product_image"];
        $keywords = $row["product_keywords"];
        $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
        mysqli_close($connect);
        return $product;
    }
    //
    function getProductsByKeywords($keywords){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_keywords` like '%$keywords%'";
        $runQuery = mysqli_query($connect, $query);
        $productsByKeywords = array();
        $product;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($productsByKeywords, $product);
        }
        mysqli_close($connect);
        return $productsByKeywords;
    }
    //
    function getProductsByCat($cat){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_cat` = '$cat'";
        $runQuery = mysqli_query($connect, $query);
        $productsByCat = array();
        $product;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($productsByCat, $product);
        }
        mysqli_close($connect);
        return $productsByCat;
    }
    //
    function getProductsByBrand($brand){
        include "../model/db_connect.php";
        $query = "select* from `product` where `product_brand` = '$brand'";
        $runQuery = mysqli_query($connect, $query);
        $productsByBrand = array();
        $product;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($productsByBrand, $product);
        }
        mysqli_close($connect);
        return $productsByBrand;
    }
    //
    function sortProductsByPrice(){
        include "../model/db_connect.php";
        $query = "select* from `product`";
        $runQuery = mysqli_query($connect, $query);
        $products = array();
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($products, $product);
        }
        mysqli_close($connect);
        //
        for($i = 0; $i < (count($products) - 1); $i++){
            for($j = ($i + 1) ; $j < count($products); $j++){
                if($products[$i]->getPrice() > $products[$j]->getPrice()){
                    $temp = new Product($products[$i]->getId(), $products[$i]->getCat(), $products[$i]->getBrand(), $products[$i]->getTitle(), $products[$i]->getPrice(), $products[$i]->getDesc(), $products[$i]->getImage(), $products[$i]->getKeywords());
                    $products[$i] = new Product($products[$j]->getId(), $products[$j]->getCat(), $products[$j]->getBrand(), $products[$j]->getTitle(), $products[$j]->getPrice(), $products[$j]->getDesc(), $products[$j]->getImage(), $products[$j]->getKeywords());
                    $products[$j] = new Product($temp->getId(), $temp->getCat(), $temp->getBrand(), $temp->getTitle(), $temp->getPrice(), $temp->getDesc(), $temp->getImage(), $temp->getKeywords());
                }
            }
        }
        return $products;
    }
    //
    function rSortProductsByPrice($start, $limit){
        include "../model/db_connect.php";
        $query = "select* from `product`";
        $runQuery = mysqli_query($connect, $query);
        $products = array();
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $id = $row["product_id"];
            $cat = $row["product_cat"];
            $brand = $row["product_brand"];
            $title = $row["product_title"];
            $price = $row["product_price"];
            $desc = $row["product_desc"];
            $image = $row["product_image"];
            $keywords = $row["product_keywords"];
            $product = new Product($id, $cat, $brand, $title, $price, $desc, $image, $keywords);
            array_push($products, $product);
        }
        mysqli_close($connect);
        //
        for($i = 0; $i < (count($products) - 1); $i++){
            for($j = ($i + 1) ; $j < count($products); $j++){
                if($products[$i]->getPrice() < $products[$j]->getPrice()){
                    $temp = new Product($products[$i]->getId(), $products[$i]->getCat(), $products[$i]->getBrand(), $products[$i]->getTitle(), $products[$i]->getPrice(), $products[$i]->getDesc(), $products[$i]->getImage(), $products[$i]->getKeywords());
                    $products[$i] = new Product($products[$j]->getId(), $products[$j]->getCat(), $products[$j]->getBrand(), $products[$j]->getTitle(), $products[$j]->getPrice(), $products[$j]->getDesc(), $products[$j]->getImage(), $products[$j]->getKeywords());
                    $products[$j] = new Product($temp->getId(), $temp->getCat(), $temp->getBrand(), $temp->getTitle(), $temp->getPrice(), $temp->getDesc(), $temp->getImage(), $temp->getKeywords());
                }
            }
        }
        return $products;
    }
    //Action Product!
    //
    function isExistUserInfo($email){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `email` = '$email'";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return ($numRows != 0);
    }
    //
    function isLogin($email, $password){
        include "../model/db_connect.php";
        $password = md5($password);
        $query = "select* from `user_info` where `email` = '$email' and `password` = '$password'";
        $runQuery = mysqli_query($connect, $query);
        $numRows = mysqli_num_rows($runQuery);
        mysqli_close($connect);
        return ($numRows == 1);
    }
    //
    function updateUserInfo($email, $firstName, $lastName, $mobile, $address1, $address2){
        include "../model/db_connect.php";
        $query = "update `user_info` set `first_name` = '$firstName', `last_name` = '$lastName', `mobile` = '$mobile', `address1` = '$address1', `address2` = '$address2' where `email` = '$email'";
        $runQuery = mysqli_query($connect, $query);
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    function changePasswordUserInfo($email, $oldPassword, $newPassword){
        include "../model/db_connect.php";
        $oldPassword = md5($oldPassword);
        $query = "select* from `user_info` where `email` = '$email' and `password` = '$oldPassword'";
        $runQuery = mysqli_query($connect, $query);
        if(mysqli_num_rows($runQuery) == 1){
            $newPassword = md5($newPassword);
            $query = "update `user_info` set `password` = '$newPassword' where `email` = '$email'";
            $runQuery = mysqli_query($connect, $query);
        }
        mysqli_close($connect);
        return ($runQuery == true);
    }
    //
    //Action UserInfo!
    function getUserInfosByFirstName($firstName){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `first_name` = '$firstName'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            array_push($userInfos, $userInfo);
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //
    function getUserInfosByLastName($lastName){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `last_name` = '$lastName'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            array_push($userInfos, $userInfo);
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //
    function getUserInfoByEmail($email){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `email` = '$email'";
        $runQuery = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
        //
        $userId = $row["user_id"];
        $firstName = $row["first_name"];
        $lastName = $row["last_name"];
        $email = $row["email"];
        $password = $row["password"];
        $mobile = $row["mobile"];
        $address1 = $row["address1"];
        $address2 = $row["address2"];
        $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
        mysqli_close($connect);
        return $userInfo;
    }
    //
    function getUserInfosByMobile($mobile){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `mobile` = '$mobile'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            array_push($userInfos, $userInfo);
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //
    function getUserInfosByAddress($address){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `address1` like '%$address%' or `address2` like '%$address%'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            array_push($userInfos, $userInfo);
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //
    function getUserInfosByInfo($info){
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `first_name` = '$info' or `last_name` = '$info' or `email` = '$info' or `mobile` = '$info' or `address1` like '%$info%' or `address2` like '%$info%'";
        $runQuery = mysqli_query($connect, $query);
        $userInfos = array();
        $userInfo;
        while($row = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){
            $userId = $row["user_id"];
            $firstName = $row["first_name"];
            $lastName = $row["last_name"];
            $email = $row["email"];
            $password = $row["password"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $userInfo = new UserInfo($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2);
            if($userInfo->getEmail() != "Admin"){
                array_push($userInfos, $userInfo);
            }
        }
        mysqli_close($connect);
        return $userInfos;
    }
    //
    function deleteUserInfo($email){
        //Note
        include "../model/db_connect.php";
        $query = "select* from `user_info` where `email` = '$email'";
        $runQuery = mysqli_query($connect, $query);
        if(mysqli_num_rows($runQuery) > 0){
            $query = "delete from `user_info` where `email` = '$email'";
            mysqli_close($connect);
            return true;
        }
        mysqli_close($connect);
        return false;
    }
    //Action by Admin!
?>