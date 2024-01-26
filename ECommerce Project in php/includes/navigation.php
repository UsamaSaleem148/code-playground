<?php

	$sql = "SELECT * FROM category WHERE parent = 0";
	$query = $dbconnect->query($sql);

?>



<!-- Nav bar Start -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">Teejarat.com</a>
		<ul class="nav navbar-nav">

			<?php while ($parent = mysqli_fetch_assoc($query)) : ?>
				<?php
				$parent_id = $parent['id'];
				$sql2 = "SELECT * FROM category WHERE parent = 1";
				$query2 = $dbconnect->query($sql2);
				?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<?php while($child = mysqli_fetch_assoc($query2)) : ?>
					<li><a href="#"><?php echo $child['category'] ?></a></li>
				<?php endwhile; ?>
				</ul>
			</li>
		<?php endwhile; ?>

		</ul>
<button type="button" class="btn btn-sm" style=" margin-top: 0.5%; background-color: inherit; color: black; border: 2px solid #4CAF50; float: right;">ADD Product</button>
	</div>
</nav>
<!-- Nav Bar End -->