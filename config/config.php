<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = 'NRG';
    
    $conn =new mysqli($servername,$username,$password,$database);

    if($conn){
       
    }else {
        die('server not connected');
    }




?>