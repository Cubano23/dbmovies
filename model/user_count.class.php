
<?php
ini_set('display_errors', 'on');
require("config/conn_db.php");
class UserCountModel
{ 
    public $conn;
    function __construct() 
    {
        $connDB = new ConnDB();
        $this->conn = $connDB->conn_data_base();
    }


     //total d'utilisateurs enregistré
        function getUserCount()
        {
            $resultat = array();        
            $sql = 'SELECT count(id) as users_count FROM users';
            $req = $this->conn->prepare($sql);       
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC); 
            return $resultat['users_count'];

        }
    }
    ?>