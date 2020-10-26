<?php 
ini_set('display_errors', 'on');
require("../model/user.class.php");

    $email = $_POST["email"];
    $password = $_POST["password"];    

    $login = new UserModel(); 
    if($login->checkUserBeforeLogin($email,$password) == 0)
    { 
        //echo ' <script type="text/javascript">';
        //echo ' alert("Utilisateur inexistant.");';
        //echo ' window.setTimeout(function(){';
        //echo ' window.location.href = "../connexion/login.php";'; 
        //echo ' }, 1000);';
        //echo ' </script>';          
    }
    else
    {   
        echo $login->checkUserBeforeLogin($email,$password);
        $login->loginUser($email, $login->checkUserBeforeLogin($email,$password));
        header("Location: ../index.php");        
    }
   
    
?>
