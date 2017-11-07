<?php
session_start();
include"connect.php";
include"header.php";
?>
<?php
if (isset($_SESSION['username'])) {?>
<?php include"navbar.php";?>
<div class="addarticle col-xs-12 text-center">
	<div class="feat">
		<form action="addarticle.php" method="POST" enctype="multipart/form-data">
			<h2 class="h1">Add Article</h2>
			<?php
				if (isset($_FILES['file']) && isset($_POST['title']) && isset($_POST['details'])) {
					$errors 		= array();
					$title 			= htmlspecialchars($_POST['title']);
					$details 		= htmlspecialchars($_POST['details']);
					$file_name 		= htmlspecialchars($_FILES['file']['name']);
					$file_size 		= $_FILES['file']['size'];
					$file_tmpName 	= $_FILES['file']['tmp_name'];
					$file_type 		= $_FILES['file']['type'];
					$array 			= explode('.', $_FILES['file']['name']);
					$file_ex 		= strtolower(end($array));
					$extentions 	= array('jpg', 'jpeg', 'gif', 'png', 'mp4');
					$image 			= rand(0, 10000) . "_" . $file_name;
					if (in_array($file_ex, $extentions) === false) {
						$errors[] = "extension not allowed, please choose a JPEG or PNG file.";
					} 
					if ($file_size > 32000000) {
						$errors[] = "File size must be excately 32 MB";
					}
					if (empty($errors) == true) {
						move_uploaded_file($file_tmpName, 'images/'.$image);
						$stmt = $con->prepare('INSERT INTO blogpage (img, title, details, time) VALUES (?, ?, ?, NOW())');
						$stmt->execute(array($image, $title, $details));
						echo "<h1 class='alert alert-success'>File Uploaded Success</h1>";
					} else {
						foreach ($errors as $key => $value) {
							echo "<h1 class='alert alert-danger'>" . $value ."</h1>";
						}
					}
				}
			?>
			<input 
				type="file" 
				name="file" 
				class="form-control" 
				required>
			<input 
				type="text" 
				name="title" 
				placeholder="Title" 
				class="form-control" 
				required>
			<textarea 
				placeholder="Details" 
				name="details" 
				class="form-control" 
				required></textarea>
			<input 
				type="submit" 
				value="Add Article" 
				class="btn btn-success form-control">
		</form>
	</div>
</div>
<?php
} else {
	header('Location: login.php');
	exit();
}
?>
<?php include"footer.php";?>