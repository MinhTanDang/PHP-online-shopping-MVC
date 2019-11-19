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
            <div class="col-md-8" id="err_msg">
                <?php
                    if(isset($messageChangePassword)){
                        echo $messageChangePassword;
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Đổi mật khẩu</div>
                    <div class="panel-body">
                        <form method="post" action="change_password_controller.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="old_password">Mật khẩu cũ</label>
                                    <input type="password" id="old_password" name="old_password" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="new_password">Mật khẩu mới</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="new_password_repat">Xác nhận mật khẩu mới</label>
                                    <input type="password" id="new_password_repat" name="new_password_repat" class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Thay đổi" name="change_password" id="change_password_btn">
                                <input type="submit" class="btn btn-primary" value="Quay lại" name="back" id="change_password_btn">
                            </div>
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