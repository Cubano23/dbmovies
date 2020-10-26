<?php
ini_set('display_errors', 'on');
require("../config/conn_db.php");
require("../controller/CrypterPassword.php");
class UserModel
{ 
    public $conn;
    function __construct() 
    {
        $connDB = new ConnDB();
        $this->conn = $connDB->conn_data_base();
    }

	function loginUser($email, $password)
	{   

        if (!empty($email) && !empty($password)) 
        {
            $sql = 'SELECT id,first_name,last_name,email FROM users WHERE email = :email AND password = :password';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':email',$email, PDO::PARAM_STR);
            $req->bindParam(':password',$password, PDO::PARAM_STR);
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC);          
            session_start();
            $_SESSION['first_name'] = $resultat['first_name']; 
            $_SESSION['last_name'] = $resultat['last_name']; 
            $_SESSION['id'] = $resultat['id']; 
            $_SESSION['email'] = $resultat['email'];        
               
        }
    }
        function checkUserBeforeInsert($email)
        {        
            $sql = 'SELECT email FROM users WHERE email = :email';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':email',$email, PDO::PARAM_STR);         
            $req->execute();
            if($req->rowCount() > 0)
            {
                return 1;//utilisateur déjà existant dans la base
            }
            else
            {
                return 0;
            }     

        }
        function insertUser($email,$password,$first_name,$last_name)
        {
            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password
            ];         
            $sql = "INSERT INTO users (first_name, last_name, email, password, date_create, date_update) VALUES (:first_name, :last_name, :email, :password, NOW(),NOW() )";
            $req= $this->conn->prepare($sql);
            $req->execute($data);          

        }
        function checkUserBeforeLogin($email,$password)
        { 
            $sql = 'SELECT password FROM users WHERE email = :email';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':email',$email, PDO::PARAM_STR);
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
            $pass_a_decrypter = $resultat['password'];
            $crypter = new CrypterPassword($password);
            $password_decrypter = $crypter->decrypt($pass_a_decrypter);       
          
            if($password == $password_decrypter)
            {
                return $resultat['password'];
            }
            else
            {
                return 0;//Wrong password 
            }
                //$sql = 'SELECT email, password FROM users WHERE email = :email AND password = :password';
                //$req = $this->conn->prepare($sql);
                //$req->bindParam(':email',$email, PDO::PARAM_STR);
                //$req->bindParam(':password',$pass_a_decrypter, PDO::PARAM_STR);         
                //$req->execute();
                //if($req->rowCount() < 1)
                //{
                    //return 0;//utilisateur inexistant
                //} 
                //else
                //{
                    //return $resultat['password'];
                //}    

            //}
            //else
            //{
                //return 0;//wrong password
            //}
            

        }
   
        
    
	
} 

?>