<?php
class ConnDB
{
    //private $servername = 'localhost';
    //private $username = 'root';
    //private $password = 'root';
    //private $dbname = 'dbmovies';
    public $conn;
    
    //On essaie de se connecter
    function conn_data_base()
    {
        try
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=bruno-soares", 'user', 'password');
            //On définit le mode d'erreur de PDO sur Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
           
        }            
        /*On capture les exceptions si une exception est lancée et on affiche
         *les informations relatives à celle-ci*/
        catch(PDOException $e)
        {
          echo "Erreur : " . $e->getMessage();
        }
    

    }
   

}
           
?>