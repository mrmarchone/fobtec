<?php include"header.php";?>
<?php include"nav.php";?>
<?php include"../../admin/connect.php";?>
<div class="blog padding40">
	<div class="container">
		<div class="row">
			<div class="paragraph text-center">
				<h2>News</h2>
			</div>
             <?php
            $stmt = $con->prepare("SELECT * FROM blogpage ORDER BY ID DESC");
            $stmt->execute();
            $row = $stmt->fetchAll();
            foreach ($row as $key => $value) {
                echo '<div class="news col-md-4 col-xs-12 wow bounceInUp" data-wow-offset="100">';
				echo '<div class="feat">';
                if (!file_exists('../../admin/images/' . $value['img'])) {
                    echo '<img src="../../admin/images/white.png" class="img-responsive img-thumbnail">';
                } else {
                    echo '<img src="../../admin/images/' . $value['img'] . '" class="img-responsive img-thumbnail">';   
                }
				echo '<h2 class="h1 text-center">' . $value['title'] . '</h2>';
				echo '<p class="lead">';
                echo $value['details'];
				echo '</p>';
                echo '<span>' . $value['time'] . '</span>';
				echo '</div>';
			    echo '</div>';
            }
            ?>
		</div>
	</div>
</div>
<?php include"sitemap.php";?>
<?php include"footer.php";?>