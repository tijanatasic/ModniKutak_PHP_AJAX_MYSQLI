<?php

class Database{
    private $hostname="localhost";
    private $username="root";
    private $password = "";
    private $dbname="iteh";
    private $dblink;
    private $result;

    public function __construct(){
        $this->connect();
    }

    function connect(){
        $this->dblink = new mysqli($this->hostname,$this->username, $this->password, $this->dbname);
        if($this->dblink->connect_errno){
           exit();
        }
        $this->dblink->set_charset("utf8");
    }

    public function select($table,$column="id,korisnicko_ime,komentar,ocena",$where=null,$order=null){
        if($table=="odeca"){
            $q="SELECT ".$column." FROM ".$table;
            if($where!=null){
                $q.=" WHERE ".$where;
            }
            if($order!=null){
                $q.=" ORDER BY ".$order;
            }
        }else if($table=="obuca"){
            $q="SELECT ".$column." FROM ".$table;
            if($where!=null){
                $q.=" WHERE ".$where;
            }
            if($order!=null){
                $q.=" ORDER BY ".$order;
            }
        }else if($table=="aksesoari"){
            $q="SELECT ".$column." FROM ".$table;
            if($where!=null){
                $q.=" WHERE ".$where;
            }
            if($order!=null){
                $q.=" ORDER BY ".$order;
            }
        }else if($table=="newsletter"){
            $q="SELECT ".$column." FROM ".$table;
            if($where!=null){
                $g.=" WHERE ".$where;
            }
            if($order!=null){
                $q.=" ORDER BY ".$order;
            }
        }else{
            throw new Exception("Nije pravilno unet naziv tabele");
        }

        if($this->executeQuery($q)){
            return true;
        }
        else{
            return false;
        }
        
    }

    public function insert($table,$values){
        
        if($table=="odeca" || $table=="obuca" || $table=="aksesoari"){   
            $korisnicko_ime=$values[0];
            $komentar=$values[1];
            $ocena=$values[2];
            $q="INSERT INTO ".$table." (korisnicko_ime,komentar,ocena) VALUES ('".$korisnicko_ime."','".$komentar."',".$ocena.")";
        }else if($table=="newsletter"){
            $ime=$values[0];
            $mail=$values[1];
            $q="INSERT INTO ".$table." (ime,email) VALUES ('".$ime."','".$mail."')";
        }else{
            throw new Exception("Naziv tabele nije dobro unet");
        }
        if($this->executeQuery($q)){
            return true;
        }else{
            return false;
        }
    }

    public function delete($table,$where){
        if($table=="odeca" || $table=="obuca" || $table=="aksesoari"){
            $q="DELETE FROM ".$table." WHERE id='".$where."'";
        }else{
            throw new Exception("Naziv tabele nije dobro unet");
        }
        if($this->executeQuery($q)){
            return true;
        }else{
            return false;
        }
    }

    public function update($table,$values){
        if($table=="odeca" || $table=="obuca" || $table=="aksesoari"){
            $q="UPDATE ".$table." SET komentar='".$values[1]."', ocena=".$values[2]." where korisnicko_ime like '".$values[0]."' AND id=".$values[3];
        }else{
            throw new Exception("Naziv tabele nije dobro unet");
        }
        if($this->executeQuery($q)){
            return true;
        }else{
            return false;
        }
    }

    function executeQuery($query){
        if($this->result = $this->dblink->query($query)){
            return true;
        }
        else{
            echo "Neizvrsen upit ".$query;
            return false;
        }

    }

    function getResult(){
        return $this->result;
    }

}


?>