<?php

interface iTemplate{
    public function getBody();
    public function getHeader();
}

interface iUser{
    public function getUserId();
    public function salutaUser();
}

//Le interfacce si implementano
class Home implements iTemplate{

    public function getBody(){
        return "Sono Bady";
    }

    public function getHeader(){
        return "Sono Header";
    }
}

class UserInfo implements iTemplate, iUser{
    public function getBody(){
        return "Sono Bady";
    }

    public function getHeader(){
        return "Sono Header";
    }

    public function getUserId(){
        return "Sono Utente 1";
    }

    public function salutaUser(){
        return "Ciao da utente 1";
    }
}