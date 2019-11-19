<?php
    class Brand{
        private $id;
        private $title;
        //
        public function __construct($id, $title){
            $this->id = $id;
            $this->title = $title;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
    }
    //////////
    class Cart{
        private $id;
        private $pId;
        private $ipAdd;
        private $userId;
        private $productTitle;
        private $productImage;
        private $qty;
        private $price;
        private $totalAmount;
        //
        public function __construct($id, $pId, $ipAdd, $userId, $productTitle, $productImage, $qty, $price, $totalAmount){
            $this->id = $id;
            $this->pId = $pId;
            $this->userId = $userId;
            $this->productTitle = $productTitle;
            $this->productImage = $productImage;
            $this->qty = $qty;
            $this->price = $price;
            $this->totalAmount = $totalAmount;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getPId(){
            return $this->pId;
        }
        public function getUserId(){
            return $this->userId;
        }
        public function getProductTitle(){
            return $this->productTitle;
        }
        public function getProductImage(){
            return $this->productImage;
        }
        public function getQty(){
            return $this->qty;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getTotalAmount(){
            return $this->totalMount;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setPId($pId){
            $this->pId = $pId;
        }
        public function setUserId($userId){
            $this->userId = $userId;
        }
        public function setProductTitle($productTitle){
            $this->productTitle = $productTitle;
        }
        public function setProductImage($productImage){
            $this->productImage = $productImage;
        }
        public function setQty($qty){
            $this->qty = $qty;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function setTotalAmount($totalAmount){
            $this->totalAmount = $totalAmount;
        }
    }
    //////////
    class Categorie{
        private $id;
        private $title;
        //
        public function __construct($id, $title){
            $this->id = $id;
            $this->title = $title;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
    }
    //////////
    class CustomerOrder{
        private $id;
        private $uId;
        private $pId;
        private $pName;
        private $pPrice;
        private $pQty;
        private $pStatus;
        private $trId;
        //
        public function __construct($id, $uId, $pId, $pName, $pPrice, $pQty, $pStatus, $trId){
            $this->id = $id;
            $this->uId = $uId;
            $this->pId = $pId;
            $this->pName = $pName;
            $this->pPrice = $pPrice;
            $this->pQty = $pQty;
            $this->pStatus = $pStatus;
            $this->trId = $trId;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getUId(){
            return $this->uId;
        }
        public function getPId(){
            return $this->pId;
        }
        public function getPName(){
            return $this->pName;
        }
        public function getPPrice(){
            return $this->pPrice;
        }
        public function getPQty(){
            return $this->pQty;
        }
        public function getPStatus(){
            return $this->pStatus;
        }
        public function getTrId(){
            return $this->trId;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setUId($uId){
            $this->uId = $uId;
        }
        public function setPId($pId){
            $this->pId = $pId;
        }
        public function setPName($pName){
            $this->pName = $pName;
        }
        public function setPPrice($pPrice){
            $this->pPrice = $pPrice;
        }
        public function setPQty($pQty){
            $this->pQty = $pQty;
        }
        public function setPStatus($pStatus){
            $this->pStatus = $pStatus;
        }
        public function setTrId($trId){
            $this->trId = $trId;
        }
    }
    //////////
    class Product{
        private $id;
        private $cat;
        private $brand;
        private $title;
        private $price;
        private $desc;
        private $image;
        private $keywords;
        //
        public function __construct($id, $cat, $brand, $title, $price, $desc, $image, $keywords){
            $this->id = $id;
            $this->cat = $cat;
            $this->brand = $brand;
            $this->title = $title;
            $this->price = $price;
            $this->desc = $desc;
            $this->image = $image;
            $this->keywords = $keywords;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getCat(){
            return $this->cat;
        }
        public function getBrand(){
            return $this->brand;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getDesc(){
            return $this->desc;
        }
        public function getImage(){
            return $this->image;
        }
        public function getKeywords(){
            return $this->keywords;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setCat($cat){
            $this->cat = $cat;
        }
        public function setBrand($brand){
            $this->brand = $brand;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function setDesc($desc){
            $this->desc = $desc;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function setKeywords($keywords){
            $this->keywords = $keywords;
        }
    }
    //////////
    class ReceivedPayment{
        private $id;
        private $uId;
        private $amt;
        private $trId;
        //
        public function __construct($id, $uId, $amt, $trId){
            $this->id = $id;
            $this->uId = $uId;
            $this->amt = $amt;
            $this->trId = $trId;
        }
        //
        public function getId(){
            return $this->id;
        }
        public function getUId(){
            return $this->uId;
        }
        public function getAmt(){
            return $this->amt;
        }
        public function getTrId(){
            return $this->trId;
        }
        //
        public function setId($id){
            $this->id = $id;
        }
        public function setUId($uId){
            $this->uId = $uId;
        }
        public function setAmt($amt){
            $this->amt = $amt;
        }
        public function setTrId($trId){
            $this->trId = $trId;
        }
    }
    //////////
    class UserInfo{
        private $userId;
        private $firstName;
        private $lastName;
        private $email;
        private $password;
        private $mobile;
        private $address1;
        private $address2;
        //
        public function __construct($userId, $firstName, $lastName, $email, $password, $mobile, $address1, $address2){
            $this->userId = $userId;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->mobile = $mobile;
            $this->address1 = $address1;
            $this->address2 = $address2;
        }
        //
        public function getUserId(){
            return $this->userId;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getMobile(){
            return $this->mobile;
        }
        public function getAddress1(){
            return $this->address1;
        }
        public function getAddress2(){
            return $this->address2;
        }
        //
        public function setUserId($userId){
            $this->userId = $userId;
        }
        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function setAddress1($address1){
            $this->address1 = $address1;
        }
        public function setAddress2($address2){
            $this->address2 = $address2;
        }
    }
    //All object array for OnlineShopping!
?>