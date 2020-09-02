
<?php
ini_set('display_errors', 'on');
require("../config/conn_db.php");
session_start();

class FilmModel
{ 
    public $conn;
    public $date;
    public $record_status;

    function __construct() 
    {
        $this->date = date("Y-m-d");
        $this->record_status = 1;
        $connDB = new ConnDB();
        $this->conn = $connDB->conn_data_base();
    }

    function insertFilm($poster,$title,$year,$movie_id,$price,$user_id)
    {
        $data = [
            'poster' => $poster,
            'title' => $title,
            'movie_year' => $year,
            'movie_id' => $movie_id,
            'price' => $price,           
            'date_create' => $this->date,
            'date_update' => $this->date,
            'user_id' => $user_id,
            'record_status' => $this->record_status 
        ];
        try{
            $sql = 'INSERT INTO films (poster,title,movie_year,movie_id,price,date_create,date_update,user_id,record_status)  
                    VALUES (:poster, :title, :movie_year , :movie_id, :price, :date_create, :date_update, :user_id, :record_status)';
             $req = $this->conn->prepare($sql);
             $req->execute($data);
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
        }
        
        $conn = null;

        }
        function getFilmsByUserId($userId)
        {
            $resultat = array();        
            $sql = 'SELECT poster,title,movie_year,movie_id,user_id  FROM films WHERE user_id = :user_id AND record_status = 1';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':user_id',$userId, PDO::PARAM_INT);        
            $req->execute();
            $resultat = $req->fetchAll(PDO::FETCH_ASSOC); 
            return $resultat;

        }
        function updateFilmByMovieId($movie_id,$user_id)
        {
            $data = [
                'record_status' => 0,
                'movie_id' => $movie_id,                
                'user_id' => $user_id
            ];
            $sql = "UPDATE films SET record_status=:record_status WHERE movie_id=:movie_id AND user_id=:user_id";
            $req= $this->conn->prepare($sql);
            $req->execute($data);
        }




}

?>