<?php

class User extends DaoMysql{

    
    public function __construct(){
            parent::__construct();
    }


    public  function  listerU($id)
    {
        $user = $this->executeSelect("select * from user where idUser=$id");
        return $user;
    }
    public  function  add($nom, $prenom, $login, $password){
        return $this->executeUpdate("INSERT INTO `user`
            (`iduser`, `nom`, `prenom`, `login`, `password`)
            VALUES (NULL, '$nom', '$prenom', '$login', '$password');"
            );
    }

    public  function  listerAllUser(){
        //Recuperation des Users
        $users=$this->executeSelect("select * from user,profil where
                   user.idprofil=profil.idprofil
                   order by iduser desc");
         return $users;

   }

    public function seConnecter($login,$password){
        return $this->executeSelect("select * from user where login='$login'  and password='$password'",false);

    }

    public function lister()
    {
        // TODO: Implement lister() method.
    }
}
