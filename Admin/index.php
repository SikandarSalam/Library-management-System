<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
	<script>
      function change() {
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "block";
      }
      function change2() {
        document.getElementById("form1").style.display = "block";
        document.getElementById("form2").style.display = "none";
      }
	</script>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" id="form1">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="usernametextbox">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="passwordtextbox">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login" class="btn float-right login_btn" style="color: red;">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<span style="padding:7px;">Change your Credentials! </span> 
					<button href="" onclick="change();" class="btn btn-secondary">Change</button>
				</div>
			</div>
		</div>
		<!-- After Change -->
		<div class="card" id="form2" style="display:none;">
			<div class="card-header">
				<h3>Change Credentials</h3>
			</div>
			<div class="card-body">
				<form method="post">
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder=" Old Password" name="old">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="New username" name="usernametextbox">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="New password" name="passwordtextbox">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Change" name="change" class="btn float-right login_btn" style="color:red;">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex  links">
				 <a href="index.php" class="btn btn-secondary">Go Back&lt&lt</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<!-- Login Php -->
<?php
    require("include/connection.inc.php");
    require("include/functions.inc.php");

    if(isset($_POST['login'])){
        $username = check_validity($connection,$_POST['usernametextbox']);
        $password = check_validity($connection,$_POST['passwordtextbox']);
        
        $query = "SELECT * FROM admin WHERE 
                  Username = '$username' AND 
                  Password = '$password'";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $_SESSION['ADMIN_LOGIN'] = "yes";   // for logout or other pages to avoid url entry
            $_SESSION['ADMIN'] = $username;
            header('location:Dashboard.php');
            die();
        }
        else{
            echo "Please enter correct details.";
        }
    }
?>

<!-- Change Credentials -->
<?php

    if(isset($_POST['change'])){
		$oldpassword= check_validity($connection,$_POST['old']);
        $username = check_validity($connection,$_POST['usernametextbox']);
        $password = check_validity($connection,$_POST['passwordtextbox']);
        
        $query = "SELECT * FROM admin WHERE
                  Password = '$oldpassword'";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
			$query1 = "UPDATE admin SET 
			Username = '".$username."',
			Password = '".$password."' WHERE
			Password = '".$oldpassword."'";
            
			mysqli_query($connection,$query1);
            header('location:index.php');
            die();
        }
        else{
            echo "Please enter correct details.";
        }
    }
?>