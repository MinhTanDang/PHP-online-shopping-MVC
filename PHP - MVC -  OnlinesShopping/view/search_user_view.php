<!DOCTYPE html>
<?php
    include "head_view.php";
?>
<body>
    <?php
        include "nav_view.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="err_msg">
                <?php
                    if(isset($messageSearchUserInfo)){
                        echo $messageSearchUserInfo;
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                <div class="panel-heading">Tìm kiếm khách hàng</div>
                    <div class="panel-body">
                        <form action="search_user_controller.php" method="post">
                            <ul class="nav navbar-nav">
                                <li style="width:300px;left:10px;top:10px;">
                                    <input type="text" class="form-control" id="search" name="info_user" placeholder="Nhập thông tin khách hàng">
                                </li>
                                <li style="top:10px;left:20px;">
                                    <button class="btn btn-primary" id="search_user" name="search">
                                        <span class='glyphicon glyphicon-search'></span>
                                    </button>
                                </li>
                            </ul>
                            <br><br>
                            <div class="bold" style="margin: 15px;">
                                <?php
                                    if(isset($userInfos)){
                                        foreach($userInfos as $userInfo){
                                            echo "<a style='color: black' href='profile_controller.php?profile-user=" . $userInfo->getEmail() . "'>" . $userInfo->getEmail() . "</a><br>";
                                        }
                                    }
                                ?>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Quay lại" name="back" id="change_password_btn">
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <?php
        include "foot_view.php";
    ?>
</body>
</html>