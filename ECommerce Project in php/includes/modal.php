<!-- Modal Start -->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelleby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Oggy's Pants</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="images/Products/men4.png" alt="Oggy's Pant" class="details img-responsive" />
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>Thses jeans are amazing. They are straight leg, fit great and look sexy. Get a pair while they last!</p>
							<hr>
							<p class="text-danger">Price <s>$ 34.99</s></p>
							<p>Price Now : $ 4.99</p>
							<p>Brand : Oggy</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
									</div>
									<p>Available: 3</p>
								</div><br><br>
								<div class="form-group">
									<label for="size">Size : </label>
									<select name="size" id="size" class="form-control">
										<option value=""></option>
										<option value="28">28</option>
										<option value="32">32</option>
										<option value="36">36</option>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal End -->