<?php

class Profil extends DaoMysql{

    public function __construct(){
        parent::__construct();
    }

    public  function  lister(){
        return $this->executeSelect("select * from profil");
    }

    public function add($data){
        // TODO: Implement add() method.
    }

    public function listerU($data)
    {
        // TODO: Implement listerU() method.
    }
}
