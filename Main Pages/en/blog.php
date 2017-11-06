<?php include"header.php";?>
<?php include"nav.php";?>
<?php include"../../admin/connect.php";?>
<div class="blog padding40">
	<div class="container">
		<div class="row">
			<div class="paragraph text-center">
				<h2>News</h2>
			</div>
			<div class="news col-md-4 col-xs-12 wow bounceInUp" data-wow-offset="100">
				<div class="feat">
					<img src="images/header2.jpg" class="img-responsive img-thumbnail">
					<h2 class="h1 text-center">Image Title</h2>
					<p class="lead">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
					</p>
				</div>
			</div>
			<div class="news col-md-4 col-xs-12 wow bounceInUp" data-wow-offset="100">
				<div class="feat">
					<img src="images/header2.jpg" class="img-responsive img-thumbnail">
					<h2 class="h1 text-center">Image Title</h2>
					<p class="lead">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
					</p>
				</div>
			</div>
			<?php
				$stmt = $con->prepare("SELECT * FROM blogpage");
				$stmt->execute();
				$row = $stmt->fetchAll();
				foreach ($row as $key) {
					$end = explode('.', $key['img']);
					echo '<div class="news col-md-4 col-xs-12 wow bounceInUp" data-wow-offset="100">';
					echo '<div class="feat">';
					if (end($end) == 'mp4') {
						echo '<video src="../../admin/images/'. $key['img'] .'" controls="true"></video>';
					} else {
						if (file_exists("../../admin/images/" . $key['img'])) {
						echo '<img src="../../admin/images/' . $key['img'] . ' "class="img-responsive img-thumbnail">';
					} else {
						echo '<img src="../../admin/images/profile.png" class="img-responsive img-thumbnail">';
					}
					}
					echo '<h2 class="h1 text-center">' . $key['title'] . '</h2>';
					echo '<p class="lead">' . $key['details'] . '</p>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
	</div>
</div>
<?php include"sitemap.php";?>
<?php include"footer.php";?>