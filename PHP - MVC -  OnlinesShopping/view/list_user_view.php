<!DOCTYPE html>
<html lang="en">
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
            <div class="col-md-6">
                <div class="panel panel-primary">
                <div class="panel-heading">Danh sách tài khoản khách hàng</div>
                    <div class="panel-body">
                        <div class="profile">
                            <div class="bold">
                                <?php
                                    foreach($userInfos as $userInfo){
                                        echo "<a style='color: black' href='profile_controller.php?profile-user=" . $userInfo->getEmail() . "'>" . $userInfo->getEmail() . "</a><br>";
                                    }
                                ?>
                            </div>
                        </div>
                        <br>
                        <form action="list_user_controller.php" method="post">
                            <input type="submit" class="btn btn-primary" value="Quay lại" name="back" id="change_password_btn">
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