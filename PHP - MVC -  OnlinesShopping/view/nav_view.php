<div class="navbar navbar-default navbar-fixed-top" id="topnav">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">OnlineShopping</a>
		</div>

		<form action="index.php" method="post">
			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name="keywords">
				</li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="sarch_btn" name="search_click"><span
								class='glyphicon glyphicon-search'></span></button>
				</li>
			
			</ul>
		</form>

		<ul class="nav navbar-nav navbar-right">
			<?php
				if(!isset($_COOKIE["username"])){
					echo '
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
					class="glyphicon glyphicon-user"></span>Sign In</a>
						<ul class="dropdown-menu">
							<div style="width: 300px;">
								<div class="panel panel-primary">
									<div class="panel-heading">Sign In</div>
									<div class="panel-heading">
										<form action="index.php" method="post">
											<label for="email">Email</label>
											<input type="text" class="form-control" id="email" name="email">
											<label for="email">Password</label>
											<input type="password" class="form-control" id="password" name="password">
											<p><br></p>
											<a href="#" style="color: white;list-style-type: none;">Forgot Password?</a>
											<input type="submit" class="btn btn-success" style="float: right;bottom:12px;"
												id="sign_in" value="Sign In" name="sign_in">
										</form>
									</div>
									<div class="panel-footer" id="e_msg">';
										if(isset($messageSignIn)){
											echo $messageSignIn;
										}
								echo'</div>
								</div>
							</div>
						</ul>
					</li>
					<li><a href="sign_up_controller.php">Sign Up</a></li>';
				}
				else{
					echo'
						<li id="shoppingcart">
							<a href="cart_controller.php" class="dropdown-toggle">
								<span
									class="glyphicon glyphicon-shopping-cart">
								</span>Cart
								<span class="badge">
									' .  count($_SESSION["cart"]) . '
								</span>
							</a>
						</li>
						<p class="user-info">Xin chào, 
							<a href="profile_controller.php">' . $_COOKIE["username"]  . '</a>
							<a href="index.php?thoat">Thoát</a>
						</p>';
				}
			?>
		</ul>
	</div>
</div>
<br><br><br>