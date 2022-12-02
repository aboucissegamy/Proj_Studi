<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Bienvenu sur notre site d'assurance automobile <?php echo $_SESSION['username']; ?>!</h1>

    <nav>
                 
      <ul class="menu">
        <li> <a href="garantie.html">Garantie</a></li>
        <li> <a href="service.html">Service</a></li>
        <li> <a href="contact.html">Contact</a></li>

      </ul>
    </nav>
    
    <form>
    <label for="story">Description de l'accident:</label>
    <textarea id="story" name="story" rows="10" cols="100"></textarea>
    <input type="file" id="file" name="file" multiple><br>
    <input type="submit" value="envoyer">
</form><br><br><br>
    <div class="sucess">
    <a href="logout.php" >Déconnexion à la page </a>
    </div><br><br><br><br><br><br><br>
<footer>
    <p class="copyright">Company AssureurPlus © 2018</p>
</footer>
</body>
</html>