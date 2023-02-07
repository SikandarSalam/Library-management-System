<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="usertextbox">
						
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
						<input type="submit" value="Login" name="login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php
    require("include/connection.inc.php");
    require("include/functions.inc.php");

    if(isset($_POST['login'])){
        $username = check_validity($connection,$_POST['usertextbox']);
        $password = check_validity($connection,$_POST['passwordtextbox']);
        
        $query = "SELECT * FROM student_login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $_SESSION['ADMIN_LOGIN'] = "yes";   // for logout or other pages to avoid url entry
            $_SESSION['ADMIN'] = $username;
            header('location:home.php');
            die();
        }
        else{
            echo "<div class='btn btn-danger'>You are not a memeber.</div>";
        }
    }
?>