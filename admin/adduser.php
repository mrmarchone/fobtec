<?php
session_start();
include"connect.php";
include"header.php";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Hello";
} else {
    echo "FAild";
}
?>
<?php include"footer.php";?>