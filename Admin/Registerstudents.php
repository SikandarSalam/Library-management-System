<?php
                require("include/connection.inc.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Students</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  body{
    background-image: url("images/12.jpg");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
background-attachment: fixed;
}
#form{
    background-color: rgba(0,0,0,0.5) !important;
    padding:0px;
    color: white;
    /* height: 500px; */
}
.books{
    background: linear-gradient(to right bottom, rgb(223, 223, 223) 50%, rgb(184, 184, 184) 50%); 
    height: 65px; 
    padding-top: 1em;
    padding-left: 10px;
    border-bottom: 3px solid rgb(184, 184, 184);
    display: block; 
    color:white;
    font-size:16pt;
}
html{
    scroll-behavior:smooth;
  }
/* Media Queries for small screen */
@media only screen and (max-width: 786px) {
#sidebar{
  display: none;
}
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="Dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item"  style="margin-left: 700px;">
              <a class="nav-link" href="Dashboard.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Registerstudents.php">Register Students </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="UploadBooks.php">Upload Books</a>
            </li>
            <li class="nav-item">
              <form action="logout.php">
                <input type="submit" value="Logout" name="logout" class="btn btn-danger">
              </form>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <div class="container-fluid">
            <div class="row">
              <div class="col-sm-0 col-0 col-md-2" >
                <div id="sidebar" >
                <div><h4 id="sidebar-brand">Departments</h4></div>
                <li type="none" class="side-item"><a href="#software" class="side-link nav-link">Software</a></li>
                <li type="none" class="side-item"><a href="#electrical" class="side-link nav-link">Electrical</a></li>
                <li type="none" class="side-item"><a href="#telecom" class="side-link nav-link">Telecommunication</a></li>
                <li type="none" class="side-item"><a href="#civil" class="side-link nav-link">Civil</a></li><br>
                <form action="Details.php">
                  <input type="submit" value="View Student History" class="btn btn-info">
                </form>
              </div>
            </div>
              <div class="col-sm-12 col-12 col-md-8 ">
               <div class="jumbotron" id="software" style=" font-weight: 700; color: red; background-image: url('images/14.jpg');  background-size: cover;">
                     <span style="border:2px solid black; border-radius:10px;" > View Students Details Here</span>             
               </div>
               <div class="header"  >
                   Students from Software Department
               </div>
               <div>
               <?php
              
                $result = mysqli_query($connection,"SELECT * FROM student where Department = 'Software' OR Department= 'software'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Registration No.</th>
                       <th>Name</th>
                       <th>Father Name</th>
                       <th>Semester</th>
                       <th>Date of Birth</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Reg_no']."</td><td>".$row['Name']."</td><td>".$row['FatherName']."</td>";
                      echo "<td>".$row['Semester']."</td><td>".$row['D_O_B']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
               </div>

               <div class="header" id="electrical">
               Students from Electrical Department
            </div>
            <div>
            <?php
                
                $result = mysqli_query($connection,"SELECT * FROM student where Department = 'Electrical' OR Department='electrical'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Registration No.</th>
                       <th>Name</th>
                       <th>Father Name</th>
                       <th>Semester</th>
                       <th>Date of Birth</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Reg_no']."</td><td>".$row['Name']."</td><td>".$row['FatherName']."</td>";
                      echo "<td>".$row['Semester']."</td><td>".$row['D_O_B']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."'class='btn-danger btn'>Delete</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
                   </div>

            <div class="header" id="telecom">
            Students from Telecomunication Department
            </div>
            <div>
            <?php
                
                $result = mysqli_query($connection,"SELECT * FROM student where Department = 'Telecommunication' OR Department='telecommunication'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Registration No.</th>
                       <th>Name</th>
                       <th>Father Name</th>
                       <th>Semester</th>
                       <th>Date of Birth</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Reg_no']."</td><td>".$row['Name']."</td><td>".$row['FatherName']."</td>";
                      echo "<td>".$row['Semester']."</td><td>".$row['D_O_B']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
                   </table>
            </div>

            <div class="header" id="civil">
            Students from Civil Department
            </div>
            <div>
            <?php
                
                $result = mysqli_query($connection,"SELECT * FROM student where Department = 'Civil' OR Department= 'civil'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Registration No.</th>
                       <th>Name</th>
                       <th>Father Name</th>
                       <th>Semester</th>
                       <th>Date of Birth</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Reg_no']."</td><td>".$row['Name']."</td><td>".$row['FatherName']."</td>";
                      echo "<td>".$row['Semester']."</td><td>".$row['D_O_B']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
            </div>
              </div>
   <div class="col-sm-0 col-0 col-md-2 "id="form">
   <span class="books">Add New Students</span><br>
   <form action="" method="post" autocomplete="off">
     <div style="margin:10px;">
     <Table >
  
              Student Name:<br>
            <input type="text" name="name" id=""><br>       
             Father Name:<br>
             <input type="text" name="f_name" id=""><br>
             Department:<br>
             <input type="text" name="department" id=""><br>
             Registration number:<br>
             <input type="text" name="reg_no" id=""><br>
             Date of Birth: <br>
             <input type="date" name="dob" id=""><br>
             Semester: <br>
             <input type="text" name="semester" id=""><br>
             <input class="btn btn-primary" type="submit" name="Register" value="Register Student">
      
     </div>
    </form>
            </div>
          </div>
</body>
</html>
<!-- PHP Code -->
<?php
   
    require("include/functions.inc.php");

    if(isset($_POST['Register'])){

        $name = $_POST['name']; 
        $f_name = $_POST['f_name']; 
        $department = $_POST['department']; 
        $reg_no = $_POST['reg_no'];
        $dob = $_POST['dob'];
        $semester = $_POST['semester'];   
        
        $query = "SELECT * FROM student WHERE
                    Reg_no = '".$reg_no."'";

            $execute = mysqli_query($connection,$query);
            
            if( ($row = $execute->fetch_assoc()) != null ){
              echo '<script>alert("Student already exist")</script>';
            }
            else{
                
                $query = "INSERT INTO student SET
                    Name = '".$name."',
                    FatherName = '".$f_name."',
                    Department = '".$department."',
                    D_O_B = '".$dob."',
                    Reg_no = '".$reg_no."',
                    Semester = '".$semester."'";

                    $execute = mysqli_query($connection,$query);
            
                    if($execute){
                        echo "<meta http-equiv='refresh' content='0'>";
                        echo "Student details added";
                    }
                    else{
                        echo "Error NOT Registered";
                    }

            }
         
            exit;
    }
         // when user delete any category
         if(isset($_GET['type']) && $_GET['type'] != ""){
          $type = check_validity($connection,$_GET['type']);
         if($type == "delete"){
          $name = check_validity($connection,$_GET['Name']);
          mysqli_query($connection,"DELETE FROM student WHERE Name = '$name'");
      }
    }
?>