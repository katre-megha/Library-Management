<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=lab_management","root","");
         echo "Done";
    }
    catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
