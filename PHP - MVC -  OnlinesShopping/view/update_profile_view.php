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
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg">
                <?php
                    if(isset($messageUpdate)){
                        echo $messageUpdate;
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cập nhật thông tin</div>
                    <div class="panel-body">
                        <form method="post" action="update_profile_controller.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">First Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">Last Name</label>
                                    <input type="text" id="l_name" name="l_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control">
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address #1</label>
                                    <input type="textarea" id="address1" name="address1" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address #2</label>
                                    <input type="textarea" id="address2" name="address2" class="form-control">
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Cập nhật" name="update" id="signup_btn">
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