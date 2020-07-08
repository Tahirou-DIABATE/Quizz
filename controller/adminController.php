<?php
//Au clique d'un Bouton de la Partie Admin
if(isset($_POST['btn_admin_submit'])){
    //Traitement de Connexion
    if($_POST['btn_admin_submit']=="dashboard"){
        //Veri fication de la Connexion
        $currentUser=$userModel->seConnecter($_POST['login'],$_POST['password']);
        //User Existe
        if($currentUser!=null){
            //User Actif
            $_SESSION['login']="on";
            header("location:index.php?lien=dashboard&page=repondrequestion");

        }else{
            //User Inexistente
            header("location:index.php");
            $_SESSION['error']="Login ou Mot de Passe Incorrect";
        }

    }
}

if($_SESSION['login']=="on"){
    if(isset($_GET['action_admin'])){
        if($_GET['action_admin']=="deconnection"){
            $_SESSION['login']="off";
            header("location:index.php");
            $_SESSION['error']="Veuillez vous Connecter";
        }
    }
}

if($_SESSION['login']=="off" && $_GET['lien']!="accueil" && $_GET['lien']!='inscription' ){
    $_SESSION['error']="Veuillez vous Connecter";
    header("location:index.php?lien=accueil");
}

?>
