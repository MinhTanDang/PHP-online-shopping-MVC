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
                <div class="panel-heading">Thông tin cá nhân</div>
                    <div class="panel-body">
                        <div class="profile">
                            <div class="content bold">
                                <p>First name: </p>
                                <p>Last name: </p>
                                <p>Email: </p>
                                <p>Mobile: </p>
                                <p>Address #1: </p>
                                <p>Address #2: </p>
                            </div>
                            <div class="content">
                                <?php                              
                                    echo "
                                        <p>" . $userInfo->getFirstName() . "</p>
                                        <p>" . $userInfo->getLastName() . "</p>
                                        <p>" . $userInfo->getEmail() . "</p>
                                        <p>" . $userInfo->getMobile() . "</p>
                                        <p>" . $userInfo->getAddress1() . "</p>
                                        <p>" . $userInfo->getAddress2() . "</p>";
                                ?>
                            </div>
                        </div>
                        <?php
                            if(!isset($_GET["profile-user"])){
                                echo '
                                <form action="change_password_controller.php" method="post">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Đổi mật khẩu" id="chang_password_btn">
                                    </div>
                                </form>
                                <br><br>
                                <form action="update_profile_controller.php" method="post">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Cập nhật thông tin"
                                            id="update_btn">
                                    </div>
                                </form>
                                <br><br>';
                            }
                            if($_COOKIE["username"] == "Admin"){
                                echo '
                                <form action="delete_user_controller.php" method="post">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Xóa tài khoản bất kỳ">
                                    </div>
                                </form>
                                <br><br>
                                <form action="search_user_controller.php" method="post">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Tìm kiếm tài khoản theo thông tin">
                                    </div>
                                </form>
                                <br><br>
                                <form action="list_user_controller.php" method="post">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Xem danh sách các tài khoản hiện có">
                                    </div>
                                </form>';
                            }
                        ?>
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