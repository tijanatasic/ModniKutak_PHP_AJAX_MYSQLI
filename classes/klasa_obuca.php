<?php

class Klasa_obuca{
    private $korisnicko_ime;
    private $komentar;
    private $ocena;

    public class __constructor($korisnicko_ime,$komentar,$ocena){
        $this->korisnicko_ime=$korisnicko_ime;
        $this->komentar=$komentar;
        $this->ocena=$ocena;
    }

    function setKorisnicko_ime($korisnicko_ime){
        $this->korisnicko_ime=$korisnicko_ime;
        return true;
    }

    function getKorisnicko_ime(){
        return $this->korisnicko_ime;
    }

    function setKomentar($komentar){
        $this->komentar=$komentar;
        return true;
    }

    function getKomentar(){
        return $this->komentar;
    }

    function setOcena($ocena){
        $this->ocena=$ocena;
        return true;
    }

    function getOcena(){
        return $this->ocena;
    }

}


?>