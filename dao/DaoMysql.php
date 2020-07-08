<?php
require_once'IDao.php';
abstract class DaoMysql implements IDao{
public abstract function  lister();
public abstract function  listerU($data);
public abstract function  add($data);

//Attributs
var $pdo=null;

public function  __construct(){
    try{
        $this->pdo = new PDO('mysql:host=localhost;dbname=quizz', 'root','');
        //Gestion des Exceptions
        $this->pdo ->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Gestion du type du resultat
        $this->pdo ->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }
    catch(Exeception $ex){
        echo "Error";
    }
}

public  function executeSelect($sql,$all=true){
    $req=$this->pdo->query ($sql);
    if($all==true)
        return $req->fetchAll();
    else
        return $req->fetch();
}

public  function executeUpdate($sql){
    $result= $this->pdo->exec ($sql);
    if($result!=0){
        return true;
    }else{
        return false;
    }
}
}
?>