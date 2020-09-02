<?php 
ini_set('display_errors', 'on');
require("../model/user.class.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $check = new UserModel(); 
    echo $check->checkUserBeforeLogin($email,$password);
    if($check->checkUserBeforeLogin($email,$password) == 0)
    { 
        echo ' <script type="text/javascript">';
        echo ' alert("Utilisateur inexistant.");';
        echo ' window.setTimeout(function(){';
        echo ' window.location.href = "../connexion/login.php";'; 
        echo ' }, 1000);';
        echo ' </script>';          
        
    }
    else
    {
        $login = new UserModel(); 
        $login->loginUser($email, $password);
        header("Location: ../index.php");
        
    }
   
    
?>
