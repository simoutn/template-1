<html lang="fr">

  <head>

    
    <title>page de connexion</title>

    <!-- Plugin CSS -->
    <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">-->
    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
   <script src="js/Easeijs.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  </head>

  <body>
  <canvas id="projector">Your browser does not support the Canvas element.</canvas>
 <div class="login-form">
    <h1>Login Form</h1>
    <form action="login-verif.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <span>
            <input type="checkbox" name="checkbox">
            <label for="checkbox">remember</label>
        </span>
        <input type="submit" name="connexion" value="Connexion" />
    </form>
</div>
  </body>
    <!-- Custom scripts for this template -->
    <script src="js/animation.js"></script>
    <script src="js/login.js"></script>
</html>
