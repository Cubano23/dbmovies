<?php

ini_set('display_errors', 'on');
require("../config/conn_db.php");


class LikeUnlikeModel
{

    public $conn;
    public $date;
    public $like_nb;
    public $unlike_nb;

    function __construct() 
    {
        $this->date = date("Y-m-d");
        $connDB = new ConnDB();
        $this->conn = $connDB->conn_data_base();
    }



    function getLikeByMovieId($movie_id)
        {
            $resultat = array();        
            $sql = 'SELECT sum(like_nb) as like_nb  FROM like_unlike WHERE movie_id = :movie_id';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT);        
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC); 
            return $resultat;

        }
        function getUnlikeByMovieId($movie_id)
        {
            $resultat = array();        
            $sql = 'SELECT sum(unlike_nb) as unlike_nb  FROM like_unlike WHERE movie_id = :movie_id';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT);        
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC); 
            return $resultat;

        }
        function insertLike($movie_id,$user_id)
        {
           

            $sql = 'SELECT like_nb FROM like_unlike WHERE movie_id = :movie_id AND user_id = :user_id';
            $req = $this->conn->prepare($sql);
            $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT);
            $req->bindParam(':user_id',$user_id, PDO::PARAM_INT);        
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC); 
            if($resultat['like_nb'] == '1')
            {
                echo ' <script type="text/javascript">';
                echo ' alert("Vous avez déjà voté.");';
                echo ' </script>';             
                return 1;//utilisateur a déjà voté like
            }
            else
            {

                $resultat = array();        
                $sql = 'SELECT unlike_nb FROM like_unlike WHERE movie_id = :movie_id AND user_id = :user_id';
                $req = $this->conn->prepare($sql);
                $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                $req->bindParam(':user_id',$user_id, PDO::PARAM_INT);        
                $req->execute();
                $resultat = $req->fetch(PDO::FETCH_ASSOC); 
                if($resultat['unlike_nb'] == '1')
                {
                    $this->unlike_nb = 0;
               
                    $sql = "UPDATE like_unlike SET unlike_nb=:unlike_nb WHERE movie_id=:movie_id AND user_id=:user_id";
                    $req= $this->conn->prepare($sql);
                    $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                    $req->bindParam(':user_id',$user_id, PDO::PARAM_INT); 
                    $req->bindParam(':unlike_nb',$this->unlike_nb, PDO::PARAM_INT); 
                    $req->execute();
                    
                    $this->like_nb = 1;

                    $sql = "UPDATE like_unlike SET like_nb=:like_nb WHERE movie_id=:movie_id AND user_id=:user_id";
                    $req= $this->conn->prepare($sql);
                    $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                    $req->bindParam(':user_id',$user_id, PDO::PARAM_INT); 
                    $req->bindParam(':like_nb',$this->like_nb, PDO::PARAM_INT); 
                    $req->execute();
                }
                else
                {
                    $this->like_nb = 1;
                    $data = [             
                        'movie_id' => $movie_id,                         
                        'date_create' => $this->date,           
                        'user_id' => $user_id,
                        'like_nb' => $this->like_nb             
                    ];
                    try{
                        $sql = 'INSERT INTO like_unlike (movie_id,date_create,user_id,like_nb)  
                                VALUES (:movie_id, :date_create, :user_id, :like_nb)';
                         $req = $this->conn->prepare($sql);
                         $req->execute($data);
                        } catch(PDOException $e) {
                            echo $sql . "<br>" . $e->getMessage();
                    }
                    
         
            
                    }

                }
              
            }  
            function insertUnlike($movie_id,$user_id)
            {
                $sql = 'SELECT unlike_nb FROM like_unlike WHERE movie_id = :movie_id AND user_id = :user_id';
                $req = $this->conn->prepare($sql);
                $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT);
                $req->bindParam(':user_id',$user_id, PDO::PARAM_INT);        
                $req->execute(); 
                $resultat = $req->fetch(PDO::FETCH_ASSOC);                
                if($resultat['unlike_nb'] == '1')
                {
                    echo ' <script type="text/javascript">';
                    echo ' alert("Vous avez déjà voté.");';
                    echo ' </script>'; 
                    return 1;//utilisateur a déjà voté unlike
                }
                else
                {
    
                    $resultat = array();        
                    $sql = 'SELECT like_nb FROM like_unlike WHERE movie_id = :movie_id AND user_id = :user_id';
                    $req = $this->conn->prepare($sql);
                    $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                    $req->bindParam(':user_id',$user_id, PDO::PARAM_INT);       
                    $req->execute();
                    $resultat = $req->fetch(PDO::FETCH_ASSOC); 
    
                    if($resultat['like_nb'] == '1')
                    {  
                        $this->like_nb = 0;
                
                        $sql = "UPDATE like_unlike SET like_nb=:like_nb WHERE movie_id=:movie_id AND user_id=:user_id";
                        $req= $this->conn->prepare($sql);
                        $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                        $req->bindParam(':user_id',$user_id, PDO::PARAM_INT); 
                        $req->bindParam(':like_nb',$this->like_nb, PDO::PARAM_INT); 
                        $req->execute(); 

                        $this->unlike_nb = 1;
               
                        $sql = "UPDATE like_unlike SET unlike_nb=:unlike_nb WHERE movie_id=:movie_id AND user_id=:user_id";
                        $req= $this->conn->prepare($sql);
                        $req->bindParam(':movie_id',$movie_id, PDO::PARAM_INT); 
                        $req->bindParam(':user_id',$user_id, PDO::PARAM_INT); 
                        $req->bindParam(':unlike_nb',$this->unlike_nb, PDO::PARAM_INT); 
                        $req->execute();
                 
                    }
                    else
                    {
                        $this->unlike_nb = 1;
                        $data = [             
                            'movie_id' => $movie_id,                         
                            'date_create' => $this->date,           
                            'user_id' => $user_id,
                            'unlike_nb' => $this->unlike_nb             
                        ];
                        try{
                            $sql = 'INSERT INTO like_unlike (movie_id,date_create,user_id,unlike_nb)  
                                    VALUES (:movie_id, :date_create, :user_id, :unlike_nb)';
                             $req = $this->conn->prepare($sql);
                             $req->execute($data);
                            } catch(PDOException $e) {
                                echo $sql . "<br>" . $e->getMessage();
                        }
                        
                       
                
                        }
    
                    }
                       
               
            }  
    


           
}

?>