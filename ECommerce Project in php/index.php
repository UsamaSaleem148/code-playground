<?php
	require_once 'Core/init.php';
	include'includes/head.php';
	include 'includes/navigation.php';
	include 'includes/header.php';
	include 'includes/leftbar.php';

	$query = "SELECT * FROM products WHERE feature = 1";
	$squery = $dbconnect->query($query);

?>
<!-- Main Content -->
<div class="col-md-8">
	<div class="row">
		<h2 class="text-center">Feature Products</h2>
		<?php while($pfeature = mysqli_fetch_assoc($squery)) : ?>
		<div class="col-md-3">
			<h4><?= $pfeature['title']; ?></h4>
			<img src="images/Products/<?= $pfeature['image']; ?>" alt="<?= $pfeature['title']; ?>" class="img-thumb" />
			<p class="list-price text-danger">Original Price : <s>$ <?= $pfeature['list_price']; ?></s></p>
			<p class="price">Our Price : $ <?= $pfeature['price']; ?></p>
			<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
		</div>
	<?php endwhile; ?>
	</div>
</div>
<!-- Main content end -->
<?php
	include'includes/modal.php';
	include 'includes/rightbar.php';
	include 'includes/footer.php';
?>