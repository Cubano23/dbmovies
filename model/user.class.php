<?php
ini_set('display_errors', 'on');
require("../config/conn_db.php");
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
            $sql = 'SELECT id,first_name,last_name,email,code,ville FROM users WHERE email = :email AND password = :password';
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
            $_SESSION['code'] = $resultat['code'];
            $_SESSION['ville'] = $resultat['ville'];        
               
        }
    }
        function checkUserBeforeInsert($email)
        { 
            $resultat = array();        
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
        function insertUser($email,$password,$first_name,$last_name,$code,$ville)
        {
            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
                'code' => $code,
                'ville' => $ville
            ];         
            $sql = "INSERT INTO users (first_name, last_name, email, password, date_create, date_update,code,ville) VALUES (:first_name, :last_name, :email, :password, NOW(),NOW(), :code, :ville )";
            $req= $this->conn->prepare($sql);
            $req->execute($data);          

        }
        function checkUserBeforeLogin($email,$password)
        {        
            $sql = 'SELECT email, password FROM users WHERE email = :email AND password = :password';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':email',$email, PDO::PARAM_STR);
            $req->bindParam(':password',$password, PDO::PARAM_STR);         
            $req->execute();
            if($req->rowCount() < 1)
            {
                return 0;//utilisateur inexistant
            } 
            else
            {
                return 1;
            }    

        }
   
        
    
	
} 

?>