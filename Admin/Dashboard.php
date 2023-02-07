<?php
                require("include/connection.inc.php");
                ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  html{
    scroll-behavior:smooth;
  }
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
    height: 500px;
}
.books{
    background: linear-gradient(to right bottom, rgb(123, 123, 123) 50%, rgb(84, 84, 84) 50%); 
    height: 65px; 
    padding-top: 1em;
    padding-left: 10px;
    border-bottom: 3px solid white;
    display: block; 
    color:white;
    font-size:16pt;
}
/* For issue Book */
.books2{
    background: linear-gradient(to right bottom, rgb(123, 23, 23) 50%, rgb(84, 4, 4) 50%); 
    height: 65px; 
    padding-top: 1em;
    padding-left: 10px;
    border-bottom: 3px solid white;
    display: block; 
    color:white;
    font-size:16pt;
}
.books3{
    background: linear-gradient(to right bottom, rgb(23, 123, 123) 50%, rgb(4, 84, 84) 50%); 
    height: 65px; 
    padding-top: 1em;
    padding-left: 10px;
    border-bottom: 3px solid white;
    display: block; 
    color:white;
    font-size:16pt;
}
/* Media Queries for small screen */
@media only screen and (max-width: 786px) {
#sidebar{
  display: none;
}
}
</style>
 <script>
      function change() {
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "block";
        document.getElementById("form3").style.display = "none";
        document.getElementById("add").style.display = "block";
      }
      function change2() {
        document.getElementById("form1").style.display = "block";
        document.getElementById("form2").style.display = "none";
        document.getElementById("form3").style.display = "none";
        document.getElementById("add").style.display = "none";
      }
      function change3() {
        document.getElementById("form3").style.display = "block";
        document.getElementById("form1").style.display = "none";
        document.getElementById("form2").style.display = "none";
        document.getElementById("add").style.display = "block";
      }
    
</script>
</head>
<body >
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
                <li type="none" class="side-item"><a href="#civil" class="side-link nav-link">Civil</a></li>
                <li type="none"><button class="btn btn-success" onclick="change();">Issue Books</button></li><br>
                <li type="none"><button class="btn btn-success" onclick="change3();">Return Books</button></li><br>
                <li type="none"><button class="btn btn-info" onclick="change2();" style="display:none;" id="add">Add Books</button></li>
              </div>
            </div>
              <div class="col-sm-12 col-12 col-md-8 ">
               <div class="jumbotron" id="software"  style=" font-weight: 700;  color: black; background-image: url('images/8.jpg');  background-size: cover;">
                      View Books Details Here             
               </div>
               <div class="header" >
                   Software Engineering Books
               </div>
               <div>
               <?php
                require("include/connection.inc.php");
                $result = mysqli_query($connection,"SELECT * FROM books where Domain = 'Software' OR Domain= 'software'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Name.</th>
                       <th>Author</th>
                       <th>Quantity</th>
                       <th>Bookshelf</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Name']."</td><td>".$row['Author']."</td>";
                      echo "<td>".$row['Quantity']."</td><td>".$row['Bookshelf']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a>";
                      echo "<a href='update.php?type=edit&Name=".$row['Name']."' class='btn-info btn'>Edit</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
               </div>

               <div class="header" id="electrical">
                Electrical Engineering Books
            </div>
            <div>
            <?php
                require("include/connection.inc.php");
                $result = mysqli_query($connection,"SELECT * FROM books where Domain = 'Electrical' OR Domain = 'electrical'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Name.</th>
                       <th>Author</th>
                       <th>Quantity</th>
                       <th>Bookshelf</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Name']."</td><td>".$row['Author']."</td>";
                      echo "<td>".$row['Quantity']."</td><td>".$row['Bookshelf']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a>";
                      echo "<a href='update.php?type=edit&Name=".$row['Name']."' class='btn-info btn'>Edit</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
            </div>

            <div class="header" id="telecom">
                Telecommunication Engineering Books
            </div>
            <div>
            <?php
                require("include/connection.inc.php");
                $result = mysqli_query($connection,"SELECT * FROM books where Domain = 'Telecommunication' OR Domain= 'telecommunication' OR Domain= 'telecom' OR Domain= 'Telecom'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Name.</th>
                       <th>Author</th>
                       <th>Quantity</th>
                       <th>Bookshelf</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Name']."</td><td>".$row['Author']."</td>";
                      echo "<td>".$row['Quantity']."</td><td>".$row['Bookshelf']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a>";
                      echo "<a href='update.php?type=edit&Name=".$row['Name']."' class='btn-info btn'>Edit</a></td></tr>";
                       }
                     
                   ?>
                   </tbody>
                   </table>
            </div>

            <div class="header" id="civil">
                Civil Engineering Books
            </div>
            <div>
            <?php
                require("include/connection.inc.php");
                $result = mysqli_query($connection,"SELECT * FROM books where Domain = 'Civil' OR Domain= 'civil'");
                ?>
               <table cellpadding="5" class="table table-borderless" style="font-size:14pt; margin-top:5px; border:1px solid grey;">
                     <thead  class="thead-dark">
                     <tr>
                       <th>Sr. no.</th>
                       <th>Name.</th>
                       <th>Author</th>
                       <th>Quantity</th>
                       <th>Bookshelf</th>
                       <th>Actions</th>
                     </tr>
                    <!-- Data display -->
                    <tbody>
                   <?php
                   $id=1;
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<tr class='table table-light'><td>".$id++."</td><td>".$row['Name']."</td><td>".$row['Author']."</td>";
                      echo "<td>".$row['Quantity']."</td><td>".$row['Bookshelf']."</td>";
                      echo "<td><a href='?type=delete&Name=".$row['Name']."' class='btn-danger btn'>Delete</a>";
                      echo "<a href='update.php?type=edit&Name=".$row['Name']."' class='btn-info btn'>Edit</a></td></tr>";
                  }
                     
                   ?>
                   </tbody>
                   </table>
            </div>
              </div>
   <div class="col-sm-0 col-0 col-md-2" style="padding:0px;" id="form">
    <div id="form1">
   <span class="books">Add New Books</span><br>
   <form action="" method="post" autocomplete="off">
     <div style="margin:10px;">
  
             Book_Name:<br>
             <input type="text" name="name" id=""><br>       
             Author:<br>
             <input type="text" name="author" id=""><br>
             Domain:<br>
             <input type="text" name="domain" id=""><br>
             Quantity:<br>
             <input type="text" name="quantity" id=""><br>
             Bookshelf:<br>
             <input type="text" name="shelf" id=""><br>
             <input class="btn btn-primary" type="submit" value="Add Book" name="Add"><br>
     </div>
    </form>
    </div>
    <div id="form2" style="display:none;">
    <span class="books2">Issue Book</span><br>
   <form action="" method="post" autocomplete="off">
     <div style="margin:10px;">
  
             Student Name:<br>
             <input type="text" name="Sname" id=""><br>       
             Reg-no.:<br>
             <input type="text" name="reg" id=""><br>
             Book Name:<br>
             <input type="text" name="bname" id=""><br>
             Domain:<br>
             <input type="text" name="domain" id=""><br>
             <input class="btn btn-primary" type="submit" value="Issue Book" name="issue"><br>
     </div>
    </form>
    </div>
    <div id="form3" style="display:none;">
    <span class="books3">Return Book</span><br>
   <form action="" method="post" autocomplete="off">
     <div style="margin:10px;">
  
             Student Name:<br>
             <input type="text" name="Sname" id=""><br>       
             Reg-no.:<br>
             <input type="text" name="reg" id=""><br>
             Book Name:<br>
             <input type="text" name="bname" id=""><br>
             Domain:<br>
             <input type="text" name="domain" id=""><br>
             <input class="btn btn-primary" type="submit" value="Book Returned" name="return"><br>
     </div>
    </form>
    </div>
            </div>
          </div>
</body>
</html>

<!-- PHP Code For Data Display-->
<?php
    require("include/connection.inc.php");
    require("include/functions.inc.php");

    if(isset($_POST['Add'])){

        $name = $_POST['name']; 
        $author = $_POST['author']; 
        $domain = $_POST['domain']; 
        $quantity = $_POST['quantity']; 
        $shelf = $_POST['shelf'];  
        
        $query = "SELECT * FROM books WHERE
                    Name = '".$name."'";

            $execute = mysqli_query($connection,$query);
            
            if( ($row = $execute->fetch_assoc()) != null ){
              echo '<script>alert("File already exist(Quantity Increased)")</script>';
              mysqli_query($connection,"UPDATE books SET Quantity= Quantity +'".$quantity."'");
            }
            else{
                
                $query1 = "INSERT INTO books SET
                    Name = '".$name."',
                    Author = '".$author."',
                    Domain = '".$domain."',
                    Quantity = '".$quantity."',
                    Bookshelf = '".$shelf."'";

                    $execute = mysqli_query($connection,$query1);
            
                    if($execute){
                        echo "<meta http-equiv='refresh' content='0'>";
                        echo "Books details added ";
                    }
                    else{
                        echo "Error NOT Registered";
                    }

            }
         
            exit;
    }
     // when user delete any Book
     if(isset($_GET['type']) && $_GET['type'] != ""){
      $type = check_validity($connection,$_GET['type']);
     if($type == "delete"){
      $name = check_validity($connection,$_GET['Name']);
      mysqli_query($connection,"DELETE FROM books WHERE Name = '$name'");
  }
}
?>

<!-- PHP Code For issue book-->
<?php

    if(isset($_POST['issue'])){

        $Sname = $_POST['Sname']; 
        $reg = $_POST['reg']; 
        $Bname = $_POST['bname']; 
        $domain = $_POST['domain'];  
        $date = date('Y-m-d H:i:s');
        
        $query = "SELECT * FROM books WHERE
                    Name = '".$Bname."'";

            $execute = mysqli_query($connection,$query);
            
            if( ($row = $execute->fetch_assoc()) != null ){
              $query1 = "UPDATE books SET 
                         Quantity = Quantity-1
                         WHERE
                         Name = '".$Bname."'";  
              mysqli_query($connection,$query1);                       

              $query = "INSERT INTO studentbooks SET
              Student = '".$Sname."',
              Reg_no = '".$reg."',
              Book = '".$Bname."',
              Domain = '".$domain."',
              Date = '".$date."',
              Status= 'Issued'";

              $execute = mysqli_query($connection,$query);
      
              if($execute){
                  echo "Books is issued to student";
                  echo "<meta http-equiv='refresh' content='0'>";
              }
              else{
                  echo "Error NOT Registered";
              }
            }
            else{
                
              echo "<script>alert('Book is not Available');</script>";

            }
            exit;
    }
?>

<!-- PHP Code For Returned book-->
<?php

    if(isset($_POST['return'])){

        $Sname = $_POST['Sname']; 
        $reg = $_POST['reg']; 
        $Bname = $_POST['bname']; 
        $domain = $_POST['domain']; 
        $date = date('Y-m-d H:i:s');
        
        $query = "SELECT * FROM books WHERE
                    Name = '".$Bname."'";

            $execute = mysqli_query($connection,$query);
            
            if( ($row = $execute->fetch_assoc()) != null ){
              $query1 = "UPDATE books SET 
                         Quantity = Quantity+1
                         WHERE
                         Name = '".$Bname."'";  
              mysqli_query($connection,$query1);                       

              $query = "INSERT INTO studentbooks SET
              Student = '".$Sname."',
              Reg_no = '".$reg."',
              Book = '".$Bname."',
              Domain = '".$domain."',
              Date = '".$date."',
              Status= 'Returned'";

              $execute = mysqli_query($connection,$query);
      
              if($execute){
                  echo "Books is issued to student";
                  echo "<meta http-equiv='refresh' content='0'>";
              }
              else{
                  echo "Error NOT Registered";
              }
            }
            else{
                
              echo "Book is not Available";

            }
          
            exit;
    }
?>