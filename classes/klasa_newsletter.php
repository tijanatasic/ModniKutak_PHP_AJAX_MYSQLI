<?php

class Klasa_newsletter{
    private $ime;
    private $email;

    public class __constructor($ime,$email){
        $this->ime=$ime;
        $this->email=$email;
    }

    function setIme($ime){
        $this->ime=$ime;
        return true;
    }

    function getIme(){
        return $this->ime;
    }

    function setEmail($email){
        $this->email=$email;
        return true;
    }

    function getEmail(){
        return $this->email;
    }
}


?>