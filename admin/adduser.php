<?php
session_start();
include"header.php";
include"connect.php";
include"navbar.php";
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_FILES['image'])) {
		$errors 	   = array();
		$file_name 	= $_FILES['image']['name'];
		$file_size 	= $_FILES['image']['size'];
		$file_tmp 	= $_FILES['image']['tmp_name'];
		$file_type 	= $_FILES['image']['type'];
		$extention  = array('jpg', 'jpeg', 'png', 'gif');
		$end		   = explode('.', $file_name);
		$fileEx 	   = strtolower(end($end));
		$rand 	  	= rand(0, 10000000) . "_" . $file_name;
		$username 	= htmlspecialchars($_POST['username']);
		$email 		= htmlspecialchars($_POST['email']);
		$password 	= sha1(htmlspecialchars($_POST['password']));
		$confirm 	= sha1(htmlspecialchars($_POST['confirmpassword']));
		if (in_array($fileEx, $extention) === false) {
			$errors[] = "This File Is Not Allowed";
		}
		if ($file_size > 22000000) {
			$errors[] = "This Image Is Bigger Than 22MB";
		}
		if (empty($errors) == true) {
         try {
			move_uploaded_file($file_tmp, 'images/users/'.$rand);
			$stmt = $con->prepare("INSERT INTO admins (img, username, email, password, confirm, groupID) VALUES (?, ?, ?, ?, ?, ?)");
         if ($password == $confirm) {
            $stmt->execute(array($rand, $username, $email, $password, $confirm, $_POST['admin']));
            echo "<h1 class='alert alert-success'>SUCCESS</h1>";
         } else {
            echo "<h1 class='alert alert-danger'>Password didn't match</h1>";
         }
      } catch(PDOException $e) {
         echo "<h1 class='alert alert-danger'>username is used before</h1>";
      }
		} else {
			foreach ($errors as $errorss) {
				echo "<h1 class='alert alert-danger'>" . $errorss . "</h1>";
			}
		}
	}
}
?>
<?php
if (isset($_SESSION['username'])) {?>
   <div class="adduser col-xs-12">
   		<div class="form">
   			<form action="adduser.php" method="POST" enctype="multipart/form-data" id="form">
   				<h2 class="h1 text-center">Add User</h2>
   				<input 
   					type="radio" 
   					name="admin" 
   					value="1">Admin<br>
   				<input 
   					type="radio" 
   					name="admin" 
   					value="2">Superuser<br>
   				<input 
   					type="file" 
   					name='image' 
   					class="form-control" 
   					required>
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
   					required
                  id="password">
   				<input 
   					type="password" 
   					name="confirmpassword" 
   					placeholder="Confirm Password(required)" 
   					class="form-control" 
   					required
                  id="confirm">
   				<input 
   					type="submit" 
   					class="form-control btn btn-primary" 
   					value="Add User"
                  id="check">
   			</form>
   		</div>
   </div>
<?php
} else {
    header('Location: login.php');
}
?>
<?php include"footer.php";?>