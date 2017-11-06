<?php session_start();?>
<?php 
include"header.php";
include"connect.php";
?>
<?php 
if (isset($_SESSION['username'])) {?>
	<div class="posts col-xs-12">
		<div class="divtable">
			<h2 class="h1 text-center">All Posts</h2>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Image/Video</th>
			      <th>Title</th>
			      <th>Details</th>
			      <th>Options</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			    $stmt = $con->prepare("SELECT * FROM blogpage");
			    $stmt->execute();
			    $row 	= $stmt->fetchAll();
			    foreach ($row as $key => $value) {
			    	$end = explode('.', $value['img']);
					echo '<tr>';
					echo '<td>' . $value['ID'] . '</td>';
					if (end($end) == 'mp4') {
							echo '<td><video src="images/'. $value['img'] .'" autoplay></video></td>';
					} else {
						if (file_exists('images/' . $key['img'])) {
							echo '<td><img src="images/profile.png" class="img-responsive" width="50px"></td>';
						} else {
							echo '<td><img src="images/' . $key['img'] . '" class="img-responsive" width="50px"></td>';
						}
				}
			      	echo '<td>' . $value['title'] . '</td>';
			      	echo '<td>' . $value['details'] . '</td>';
			      	echo '<td>';
			      	echo '<form action="remove.php" method="GET">';
			      	echo '<input type="hidden" value="' . $value['ID'] .'" name="ID">';
			      	echo '<input type="submit" class="btn btn-danger col-xs-12" value="Remove">';
			      	echo '</form>';
			      	echo '<form action="editarticle.php" method="GET">';
			      	echo '<input type="submit" class="btn btn-success col-xs-12" value="Edit">';
			      	echo '</form>';
			      	echo '</td>';
			    	echo '</tr>';
			    }
			    ?>
			  </tbody>
			</table>
		</div>
	</div>
<?php
} else {
	header('Location: login.php');
	exit();
}
?>
<?php include"footer.php";?>