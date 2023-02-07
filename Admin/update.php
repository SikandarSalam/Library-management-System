<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    td{
        font-size:20px;
        font-weight: 500;
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
<div class="container" style="background-color: rgb(240, 240, 240); ; padding:50px; ">
    <form action="" method="post">
        <a href="Dashboard.php" class="btn btn-secondary"> Back</a>
        <table>
        <tr><td>Enter new Name: </td>
        <td><input type="text" name="name" id=""></td></tr>
        <tr><td> Enter new Author name:</td>
        <td><input type="text" name="author" id=""></td></tr>
        <tr><td> Enter new Quantity: </td><td>
        <input type="text" name="quantity" id=""></td></tr>
        <tr><td> Enter new Domain: </td><td>
        <input type="text" name="domain" id=""></td></tr>
        <tr><td>Enter new Shelf number: </td><td>
        <input type="text" name="shelf" id=""></td></tr>
        <tr><td colspan="2"><input type="submit" value="Update" name="update" class="btn btn-primary"></td></tr>
        </table>
    </form>
    </div>
</body>
</html>

<?php 
 require("include/connection.inc.php");
 require("include/functions.inc.php");

 if(isset($_POST['update'])){

     $name = $_POST['name']; 
     $author = $_POST['author']; 
     $domain = $_POST['domain']; 
     $quantity = $_POST['quantity']; 
     $shelf = $_POST['shelf'];  

     if(isset($_GET['Name']) && $_GET['Name'] != ""){
        mysqli_query($connection,"UPDATE books SET Name = '".$name."',
                    Author = '".$author."',
                    Domain = '".$domain."',
                    Quantity = '".$quantity."',
                    Bookshelf = '".$shelf."'
                    WHERE Name = '".$_GET['Name']."'");
        header("location:Dashboard.php");   
     } 
 }

?>