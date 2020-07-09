<?php
  interface IDao{
   public function  lister();
   public function  listerU($data);
   public function  add($nom, $prenom, $login, $password);
  }
?>