<?php 
session_start();
include"header.php";
include"connect.php";
include"emptytable.php";
?>
<?php
if (isset($_GET['ID'])) {
	$stmt = $con->prepare("DELETE FROM blogpage WHERE ID = ?");
	$stmt->execute(array($_GET['ID']));
	header('Location: posts.php');
	exit();
} else {
	echo "<h1 class='alert alert-danger'>ERROR</h1>";
}
?>
<?php
include"footer.php";
?>