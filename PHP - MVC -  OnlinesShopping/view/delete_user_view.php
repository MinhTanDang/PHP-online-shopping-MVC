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
            <div class="col-md-4"></div>
            <div class="col-md-4" id="err_msg">
                <?php
                    if(isset($messageDeleteUser)){
                        echo $messageDeleteUser;
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Xóa tài khoản</div>
                    <div class="panel-body">
                        <form method="post" action="delete_user_controller.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Nhập email tài khoản muốn xóa</label>
                                    <input type="text" id="address2" name="email" class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Xóa" name="delete_user" id="delete_user_btn">
                                <input type="submit" class="btn btn-primary" value="Quay lại" name="back" id="change_password_btn">
                            </div>
                        </form>
                    </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <?php
        include "foot_view.php";
    ?>
</body>
</html>