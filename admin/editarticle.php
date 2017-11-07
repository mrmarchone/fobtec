<?php
session_start();
include"header.php";
include"connect.php";
?>
<?php
if (isset($_SESSION['username'])) {?>
<div class="editarticle col-xs-12">
	<div class="">
		
	</div>
</div>
<?php
}
?>
<?php include"footer.php";?>