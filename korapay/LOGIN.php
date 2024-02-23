<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/LOGIN_CSS.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
    <div class="container-fluid">
      <!-- la disponibilite des biens -->

      <div class="container-fluid">

                                          
                <div class="login-box">
                  <form name="login" method="post">
                  <?php 
                                $bd = new PDO("mysql:host=localhost; dbname=korapay","root", "");
                                //Si l'utilisateur clique sur connextion
                                if(isset($_POST["connexion"])){
                                  

                                  //Si l'un des champs sont vide
                                  if(empty($_POST['email']) || empty($_POST['password'])){
                                    echo "Vous devez entrer tous les champs pour vous connecter !!!<br>";
                                  }
                                  else{
                                   // echo "test<br>";

                                    //on recupere les valeurs des champs
                                    $login = $_POST['email'];
                                    $pass = $_POST['password'];
                                    //requete de selection
                                    $req = "SELECT nomuser FROM client WHERE email='".$login."' AND password='".$pass."'";
                                    //execution de la requete 
                                    $stm = $bd->query($req); 
                                    //si il ya aumoins un resultat
                                    if($stm->rowcount()>0){
                                      $find = $stm->fetch();
                                      $user_name = $find['nomuser'];
                                      session_start(); 
                                      $_SESSION['user_name'] = $user_name;
                                      header("Location:index.php");
                                    }
                                    else{
                                      echo "Identifiant ou mot de passe incorrecte";
                                    }

                                  }
                                }
              	   ?>
                  <h1>connectez-vous</h1>
                    
                    <div class="textbox">
        
                        <i class="fas fa-envelope-square"></i>
                        <input type="email" placeholder="Adresse email" name="email" value="">
                        
                    </div>
                    <div class="textbox">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mot de passe" name="password" value="">
                    </div>
                    <a href="index.php">
                    <input class="btn" type="submit" name="connexion" value="connexion">
                    </a>
                    
                      <a href="LOGIN_INSCRIPTION.php">
                    <input class="btnn" type="button" name="" value="Inscription">
                    </a>
                    <div class="row">
                        <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                              Me rappeler
                            </label>
                          </div>
                        </div>
                      </div>
                       <p class="mb-1">
                              <a href="LOGIN_PASSWORD_OUBLIÉ.php">Mot de passe oublié?</a>
                      </p>
                  </form>
                    
                </div>
              
      </div>

    </div>

  

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>


