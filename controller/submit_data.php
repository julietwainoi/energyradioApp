<?php
    include '../config/config.php';
    $token  = "";
    $firstname = "";
    $email = "";
    $phonenumber = "";
    $error = array();

    if(isset($_POST['submit'])){
        $token = test_input($_POST['_token']);        
        $email=test_input($_POST['email']); 
        $link = test_input($_POST['link']);
        $phonenumber = test_input($_POST['phonenumber']);

        $_SESSION['token'] = $token;
        $_SESSION['email'] = $email;
        $_SESSION['link'] = $link;
        $_SESSION['phonenumber'] = $phonenumber;


        // echo "the token is " .$token. " and the email is " .$email. " link " .$link;

    }

    if ($token == "" || $email == "" || $link =="" || $phonenumber == "") {
        array_push($error,'fix all the missing details');
    }

    $sql = "SELECT * from  users WHERE  email ='$email' or link = '$link'";
    $result  = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        array_push($error,"those details are in use");
        if (!empty($error)){
            echo "ehres an eroror " .$error[0];
        }
    } else {
        
     $sql1 = "insert into users values('$token','$firstname','$email','$phonenumber','$link')";
    if(mysqli_query($conn,$sql1)){
        echo "successfuly entered data";
        // header("Location :http://localhost/nrgApp/success.php");
    }else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }

    }

    

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>