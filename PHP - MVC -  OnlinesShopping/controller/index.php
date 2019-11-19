<?php
    include "../model/action.php";
    session_start();
    ////Action

    if(isset($_POST["sign_in"])){
        if(isLogin($_POST["email"], $_POST["password"])){
            setcookie("username", $_POST["email"]);
            header("location: index.php");
        }
        else{
            $messageSignIn = "Email hoặc password không chính xác!";
        }
    }
    if(isset($_GET["thoat"])){
        setcookie("username", "", time() - 1);
        unset($_SESSION["cart"]);
        header("location: index.php");
    }
    //Sign In - sign out

    if(isset($_COOKIE["username"])){
        if(!isset($_SESSION["cart"])){
            $_SESSION["cart"] = array();
        }
        else{
            if(isset($_POST["product_id"])){
                $product = getProductById($_POST["product_id"]);
                array_push($_SESSION["cart"], $product);
                header("location: index.php");
            }   
        }
    }
    //Cart

    // totalRecord: tổng số records
    // limit: số records hiển thị trên mỗi trang
    // $totalPage: Tổng số trang
    // currentPage: trang hiện tại
    // start: record bắt đầu trong câu lệnh SQL
    $categories = getCategories();
    $brands = getBrands();
    if(!isset($products)){
        $totalRecords = getTotalRecord();
        $limit = 6;
        $totalPage = ceil($totalRecords / $limit);
        $currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
        $start = ($currentPage - 1) * $limit;
        //
        $products = getProducts($start, $limit);
    }
    if(isset($_POST["search_click"])){
        $products = getProductsByKeywords($_POST["keywords"]);
    }
    elseif(isset($_GET["categorie"])){
        $products = getProductsByCat($_GET["categorie"]);
    }
    elseif (isset($_GET["brand"])){
        $products = getProductsByBrand($_GET["brand"]);
    }
    elseif (isset($_GET["sort"])){
        $products = sortProductsByPrice();
    }
    //Phân trang(*)

    include "../view/index_view.php";
    //Index
?>