<!DOCTYPE html>
<html lang="en">
<?php
	include "head_view.php";
?>
<body>
	<?php
		include "nav_view.php";
	?>
	<!-- Slider Begins -->
	<div class="one-time">
		<div><img src="../view/assets/images/car1.jpg"></div>
		<div><img src="../view/assets/images/car2.jpg"></div>
		<div><img src="../view/assets/images/car3.jpg"></div>
	</div>
	<!-- Slider ends -->
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_cat"></div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">
							<h4>Categories</h4>
						</a>
					</li>
					<?php
						foreach($categories as $categorie){
							echo '<li><a href="index.php?categorie=' . $categorie->getId() . '">' . $categorie->getTitle() . '</a></li>';
						}
					?>
				</div>
				<div id="get_brand"></div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">
							<h4>Brands</h4>
						</a></li>
					<?php
						foreach($brands as $brand){
							echo '<li><a href="index.php?brand=' . $brand->getId() . '">' . $brand->getTitle() . '</a></li>';
						}
					?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">
						
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--Featured Products--
						<div class='pull-right'>
							Sort: &nbsp;&nbsp;&nbsp;<a href="index.php?sort" id='price_sort'>Price</a> | <a href="#"
								id='pop_sort'>Popularity</a>
						</div>
					</div>
					<div class="panel-body">
						<div id="get_product"></div>
						<?php
							foreach($products as $product){
								echo '
								<div class="col-md-4">
								<div class="panel panel-info">
									<div class="panel-heading">' . $product->getTitle() . '</div>
									<div class="panel-body height"><img class="size-product" src="../view/assets/prod_images/' . $product->getImage() . '"></div>
									<div class="panel-heading">
										<form action="index.php" method="post">' . $product->getPrice() . '
											<input type="hidden" name="product_id" value="' . $product->getId() . '">
											<button type = "submit" class="btn btn-danger btn-xs" name="add_to_cart" style="float:right;">Add to Cart</button>
										</form>
									</div>
								</div>
								</div>';
							}
						?>
					</div>
					<div class="panel-footer">&copy; 2017</div>
				</div>
				<div class="page" style="text-align: center;">
					<?php
						if(!isset($_POST["search_click"]) && !isset($_GET["categorie"]) && !isset($_GET["brand"]) && !isset($_GET["sort"])){
							if ($currentPage > 1 && $totalPage > 1){
								echo '<a href="index.php?page=' . ($currentPage - 1) . '">Prev</a> | ';
							}
							for ($i = 1; $i <= $totalPage; $i++){
								if ($i == $currentPage){
									echo '<span>' . $i . '</span> | ';
								}
								else{
									echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
								}
							}
							if ($currentPage < $totalPage && $totalPage > 1){
								echo '<a href="index.php?page=' . ($currentPage + 1) . '">Next</a> | ';
							}
						}
					?>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Product Details</h4>
						</div>
						<div class="modal-body" id='dynamic_content'>
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
			<!-- Modal ends-->
		</div>
	</div>
	<?php
		include "foot_view.php";
	?>
</body>
</html>