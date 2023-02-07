<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $server_name = "localhost";
    $db_name = "lab_project";
    $db_server_usernmae = "root";
    $db_server_pass = "";
    
    $connection = mysqli_connect($server_name,$db_server_usernmae,$db_server_pass,$db_name);
?>