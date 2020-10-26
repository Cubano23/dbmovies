<?php 
ini_set('display_errors', 'on');
require("../model/user.class.php");
require("CrypterPassword.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    //ici on met la première lettre du Nom et prénom en majuscule
    $first_name = ucfirst(strtolower($first_name));
    $last_name = ucfirst(strtolower($last_name));

    $crypter = new CrypterPassword($password);
    $password_crypter = $crypter->encrypt($password);

    $check = new UserModel();  
    if($check->checkUserBeforeInsert($email) == 1)
    {   
        echo ' <script type="text/javascript">';
        echo ' alert("Compte déjà existant.");';
        echo ' window.setTimeout(function(){';
        echo ' window.location.href = "../connexion/signup.php";'; 
        echo ' }, 1000);';
        echo ' </script>'; 
    }
    elseif($check->checkUserBeforeInsert($email) == 1)
    {
        echo ' <script type="text/javascript">'; 
        echo ' window.location.href = "../connexion/signup.php"';
        echo ' </script>';   
    }
    else
    {
        $insert = new UserModel();
        $insert->insertUser($email,$password_crypter,$first_name,$last_name);  
        echo ' <script type="text/javascript">';
        echo ' alert("Compte créé avec succes.");';
        echo ' window.setTimeout(function(){';
        echo ' window.location.href = "../connexion/login.php";'; 
        echo ' }, 1000);';
        echo ' </script>'; 

    }
?>
