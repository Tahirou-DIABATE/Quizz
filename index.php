<?php
define ("URL_VIEWS_FRONT","./views/front");
define ("URL_VIEWS_ADMIN","./views/admin");
define ("URL_DAO","./dao");
define ("URL_CONTROLLER","./controller");
define ("URL_MODEL","./models");

//Lancer la Session
session_start();

require_once URL_DAO."/DaoMysql.php";

//Inclusion des models
require_once(URL_MODEL."/User.php");
require_once(URL_MODEL."/Profil.php");

//Creer les Objets
$userModel=new User();
$profilModel=new Profil();

require_once "./inc/header.inc.php";

require_once URL_CONTROLLER."/adminController.php";
require_once URL_CONTROLLER."/frontController.php";

if(!isset($_GET['lien']) ||  (isset($_GET['lien']) && $_GET['lien']=="accueil") ){
    //Page du Front
    require_once URL_VIEWS_FRONT."/header.php";
    require_once URL_VIEWS_FRONT."/login.php";
    // End   Page du Front
}

if(isset($_GET['lien'])){
    if($_GET['lien']=="inscription"){
        require_once URL_VIEWS_FRONT."/header.php";
        require_once URL_VIEWS_FRONT."/inscription.php";
    }elseif($_GET['lien']=="dashboard"){
        require_once URL_VIEWS_FRONT."/header.php";
        require_once URL_VIEWS_ADMIN."/dashboard.php";
    }
}


require_once('./inc/footer.inc.php');
?>
