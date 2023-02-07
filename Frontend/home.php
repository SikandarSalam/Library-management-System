<?php
require("include/connection.inc.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
      body{
    background-image: url("images/5.jpg");
background-size: cover;
height:100%;
background-repeat: no-repeat;
font-family: 'Numans', sans-serif;
background-attachment: fixed;
      }
      .jumbotron{
          color: rgb(112, 169, 255);
          font-weight: 500;
          text-align: center;
          font-size: 40px;
          font-family: Arial, Helvetica, sans-serif;
          letter-spacing: 2pt;
          background-color: rgba(0,0,0,0.5) !important;
        }
        .img-fluid{
          height: 220px;
          width: 100%;
        }
        .nav-link{
    font-size: 18px;
    margin-right:30px;
   }
   #footer{
    height:13%;
    color: white;
    background: linear-gradient(to bottom, gray, slategray, lightslategray);
    text-align: center;
    padding-top: 25px;
    font-style: bold;
   }
   .nav-item{
    padding-top: 1em;
   }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="home.php">
          <img src="images/book.png" style="height:60px; width:60px;" alt=""> E-Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item" > 
                <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                <input type="submit" name="go" class="btn btn-info" value="GO">
            </div>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
           </div>
              </form></li>
          <li class="nav-item" style="margin-left: 15em;">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Details.php">View Details </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Books.php">View Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact-Us.php">Contact Us</a>
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
      <div class="container">
      <div class="jumbotron">
        WELCOME TO E-LIBRARY
      </div>
      </div>
      <div class="container">
        <div class="row" >  
          
    <?php
    
    $result = mysqli_query($connection,"SELECT * FROM upload");
    while($row = mysqli_fetch_assoc($result)){
      if($row['Domain']== "Software"){
         $image="software.jpg";
      }
      if($row['Domain']== "Electrical"){
        $image="electrical.webp";
     }
     if($row['Domain']== "Telecommunication"){
      $image="telecom.jpg";
   }
   if($row['Domain']== "Civil"){
    $image="civil.png";
 }
    $file=$row['File'];
    $book=$row['Bname'];
    echo '<div class="card col-10 col-md-6 col-lg-4" >';
    echo "<img class='card-img-top img-thumbnail img-fluid' src='images/".$image."' alt='Card image cap'>";
    
    echo '<div class="card-body">';
    echo '<h5 class="card-title">Book Name: '.$book.'</h5>';
    echo "<p class='card-text'>Author: ".$row['Author']. "<br>Domain: ".$row['Domain']."</p>";
    echo '<a href="../Admin/uploads/'.$file.'" download="'.$book.'" class="btn btn-danger">Download PDF</a> </div></div>';
    
    }
    ?>
    </div>
    </div>
    <div id="footer">
      <b> Copyright © 2022 Sikandar Salam</b>
    </div>
</body>
</html>