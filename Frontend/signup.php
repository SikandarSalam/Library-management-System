<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigup Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        html,body{
background-image: url("images/6.jpg");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
    </style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 >Register Yourself</h3>
                <span style="color:red;">Note: Only Members can register</span>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Registration Number" name="usertextbox">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="passwordtextbox">
					</div>
					<div class="form-group">
						<input type="submit" value="Sign Up" name="signup" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links nav-link">
					Already have an account?<a href="index.php">Sign in</a>
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

    if(isset($_POST['signup'])){
        $username = check_validity($connection,$_POST['usertextbox']);
        $password = check_validity($connection,$_POST['passwordtextbox']);
        
        $query = "SELECT * FROM student WHERE 
                  Reg_no = '".$username."'";
        $result = mysqli_query($connection,$query);
        if( ($row = $result->fetch_assoc()) != null){
            $query2 = "INSERT INTO student_login SET 
                       username = '$username',
                       password = '$password'";
            $execute = mysqli_query($connection,$query2);
            if($execute){
                echo "<div class='btn btn-success'>Sign up Successfully.</div>";
                header('location:index.php');
                die();
            }
        }
        else{
            echo "<div class='btn btn-danger'>You are not a memeber.</div>";
        }
    }
?>