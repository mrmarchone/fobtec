<?php
session_start();
include"connect.php";
include"header.php";
?>
<?php
if (isset($_SESSION['username'])) {?>
   <div class="adduser col-xs-12">
   		<div class="form">
   			<form action="dashboard.php" method="POST">
   				<h2 class="h1 text-center">Add User</h2>
   				<input 
   					type="radio" 
   					name="admin" 
   					value="admin">Admin<br>
   				<input 
   					type="radio" 
   					name="admin" 
   					value="superuser">Superuser<br>
   				<input 
   					type="text" 
   					name="username" 
   					placeholder="Username(required)" 
   					class="form-control" 
   					required>
   				<input 
   					type="email" 
   					name="email" 
   					placeholder="Email(required)" 
   					class="form-control" 
   					required>
   				<input 
   					type="password" 
   					name="password" 
   					placeholder="Password(required)" 
   					class="form-control" 
   					required>
   				<input 
   					type="confirmpassword" 
   					name="confirmpassword" 
   					placeholder="Confirm Password(required)" 
   					class="form-control" 
   					required>
   				<input 
   					type="file" 
   					name="profileimg" 
   					class="form-control" 
   					required>
   				<input 
   					type="submit" 
   					class="form-control btn btn-primary" 
   					value="Add User">
   			</form>
   		</div>
   </div>
<?php
} else {
    header('Location: login.php');
}
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_FILES['profileimg'])) {
        $errors             = array();
        $admin              = htmlspecialchars($_POST['admin']);
        $username           = htmlspecialchars($_POST['username']);
        $password           = htmlspecialchars($_POST['password']);
        $confirmpassword    = htmlspecialchars($_POST['confirmpassword']);
        $profileimgname     = $_FILES['profileimg']['name'];
        $profileimgsize     = $_FILES['profileimg']['size'];
        $profileimgtmp      = $_FILES['profileimg']['tmp_nam'];
        $profileimgtype     = $_FILES['profileimg']['type'];
        $end                = explode('.', $profileimgname);
        $profilex           = strtolower(end($end));
        $extitions          = array('jpg', 'jpeg', 'png');
        $image              = rand(0, 10000) . "_" . $profileimgname;
        if (in_array($profilex, $extitions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($profileimgsize > 32000000) {
                $errors[] = "File size must be excately 32 MB";
        }
        if (empty($errors) == true) {
            move_uploaded_file($profileimgtmp, 'images/users/'.$image);
            echo "<h1 class='alert alert-success'>File Uploaded Success</h1>";
        }
    }
}
?>
?>
<?php include"footer.php";?>