<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Books</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <style>
     /* Add Books CSS */
#body{
    background-image: url("images/11.jpg");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

#form{
    background-color: rgba(0,0,0,0.5) !important;
    padding:30px;
    width:500px;
    margin-top:30px;
}
table{
    color: white;
    font-size:20px;
}
 </style>
</head>
<body id="body">
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
              <a class="nav-link" href="RegisterStudents.php">Register Students </a>
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

    <div class="container">
<div class="jumbotron" style=" margin-top:2px; height:250px; font-size: 45px; padding-top:100px; background-image: url('images/15.jpg');  background-size: cover;">
<b> Upload New Books </b>
</div>
</div>   
<div class="container" id="form">
    <form action="" method="post" enctype="multipart/form-data">
     <Table cellpadding="3">
         <tr>
             <td>Book_Name:</td>
             <td><input type="text" name="name" id=""></td>
         </tr>
         <tr>
             <td>Author:</td>
             <td><input type="text" name="author" id=""></td>
         </tr>
         <tr>
             <td>Domain:</td>
             <td><input type="text" name="domain" id=""></td>
         </tr>
         <tr>
           <td>
             <label for="file"> PDF File</label>
           </td>
           <td><input type="file" name="file" id=""></td>
         </tr>
         <tr>
         <tr>
             <td cellspan="2" ><input class="btn btn-primary" type="submit" value="Add Book" name="upload"></td>
         </tr>
     </Table>
    </form>
    </div>
</body>
</html>

<!-- PHP Code -->
<span class="btn btn-success">
<?php
    require("include/connection.inc.php");
    require("include/functions.inc.php");

    if(isset($_POST['upload'])){

        $name = $_POST['name']; 
        $author = $_POST['author']; 
        $domain = $_POST['domain']; 

        $file_name = $_FILES['file']['name'];
        $file_tmp_location = $_FILES['file']['tmp_name'];
        $file_future_path = "./uploads/";  
  
        

        // $img_name = $_FILES['img']['name'];
        // $img_tmp_location = $_FILES['img']['tmp_name'];
        // $img_future_path = "./images/";

        
        $query = "SELECT * FROM upload WHERE
                    Bname = '".$name."' AND
                    Author = '".$author."'";

            $execute = mysqli_query($connection,$query);
            
            if( ($row = $execute->fetch_assoc()) != null ){
                echo "File already exist";
            }
            else{
                
                $query = "INSERT INTO upload SET
                    Bname = '".$name."',
                    Author = '".$author."',
                    Domain = '".$domain."',
                    file = '".$file_name."'";

                    $execute = mysqli_query($connection,$query);
            
                    if($execute){
                        echo "Books details added";
                    }
                    else{
                        echo "Error NOT Registered";
                    }

            }
            move_uploaded_file($file_tmp_location,$file_future_path.$file_name);
            exit;
    }
?>
</span>