<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
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
      <?php
require("include/connection.inc.php");
if(isset($_POST['go'])){
   $value= $_POST['search'];

   $query = "SELECT * FROM upload WHERE Bname = '$value' OR Domain= '$value'";
   $result = mysqli_query($connection,$query);
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
}
?>
</body>
</html>
