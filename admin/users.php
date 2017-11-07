<?php
session_start();
include"header.php";
include"connect.php";
?>
<?php
if (isset($_SESSION['username'])) {
	include"navbar.php";?>
<div class="posts col-xs-12">
		<div class="divtable">
			<h2 class="h1 text-center">All Posts</h2>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Image</th>
			      <th>Username</th>
			      <th>Email</th>
			      <th>Options</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			    $stmt = $con->prepare("SELECT * FROM admins");
			    $stmt->execute();
			    $row 	= $stmt->fetchAll();
			    foreach ($row as $key => $value) {
			    	$end = explode('.', $value['img']);
					echo '<tr>';
					echo '<td>' . $value['ID'] . '</td>';
					if (end($end) == 'mp4') {
							echo '<td><video src="images/'. $value['img'] .'" autoplay></video></td>';
					} else {
						if (file_exists('images/' . $value['img'])) {
							echo '<td><img src="images/' . $value['img'] . '" class="img-responsive" width="150px"></td>';
						} else {
							echo '<td><img src="images/profile.png" class="img-responsive" width="50px"></td>';
						}
				}
			      	echo '<td>' . $value['username'] . '</td>';
			      	echo '<td>' . $value['email'] . '</td>';
			      	echo '<td>';
			      	echo '<form action="removeuser.php" method="GET">';
			      	echo '<input type="hidden" value="' . $value['ID'] .'" name="ID">';
			      	echo '<input type="submit" class="btn btn-danger col-xs-12" value="Remove">';
			      	echo '</form>';
			      	echo '<form action="edituser.php.php" method="GET">';
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
}
?>
<?php include"footer.php";?>