<!DOCTYPE html>
<html lang="en">
<?php
    include "head_view.php";
?>
<body>
    <div class="navbar navbar-default navbar-fixed-top" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">OnlineShopping</a>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg">
                <?php
                    if(isset($messageSignUp)){
                        echo $messageSignUp;
                    }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Signup Form</div>
                    <div class="panel-body">
                        <form method="post" action="sign_up_controller.php">
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
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
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
                                <input type="submit" class="btn btn-primary" value="Signup" name="signup" id="signup_btn">
                            </div>
                        </form>
                    </div>
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