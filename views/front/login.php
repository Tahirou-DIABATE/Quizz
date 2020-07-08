<div class="contain"> <br>
    <div style="width: 40%; margin: 0 auto;">
        <?php  if(isset($_SESSION['error'])){ ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><?=$_SESSION['error']?></strong>
            </div>
            <?php
            unset($_SESSION['error']);
        } ?>
    </div>
    <div class="contain3" style="width: 500px; ">
        <h1>Connexion</h1>
        <button type="button" class="close" aria-label="Close" style="margin-top: -40px; margin-right: 30px; color:white;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="contain9" >
        <form action="index.php" method="post">
            <div class="form-group" style="padding: 10px;">
                <label for=""></label>
                <input type="text" name="login" required="required" class="form-control" placeholder="Login"
                       style="background-color:#F0EEF1;background-image: url(images/ic-login.png) ;
                   background-repeat:no-repeat; background-position: 400px; height: 60px; border: gray solid 0.5px;
                   width: 450px; margin-left: 15px;"><br>
                <input type="password" name="password" required="required" class="form-control" placeholder="Password"
                       style="background-color:#F0EEF1; background-image: url(images/ic-cadena.jpg) ;
                   background-repeat:no-repeat; background-position: 390px;height: 60px;border: gray solid 0.5px;
                   width: 450px; margin-left: 15px;">
            </div>
            <div style="padding-left:10px; display: flex;">
                <button type="submit" value="dashboard" name="btn_admin_submit" class="btn btn-primary"
                        style="background-color: #51BFD0; border: none; margin-left: 15px;" action>Connexion</button>
                <a style="padding-left: 20px; padding-right: 20px;"
                   href="index.php?lien=inscription"><small>S'inscrire pour jouer</small></a>
            </div>
        </form>
    </div>
</div>