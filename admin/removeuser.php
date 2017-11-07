<?php 
session_start();
include"header.php";
include"connect.php";
?>
<?php
if (isset($_GET['ID'])) {
	$stmt = $con->prepare("DELETE FROM admins WHERE ID = ?");
	$stmt->execute(array($_GET['ID']));
	header('Location: users.php');
	exit();
} else {
	echo "<h1 class='alert alert-danger'>ERROR</h1>";
}
?>
<?php
include"footer.php";
?>