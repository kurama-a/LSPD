<?php
session_start();

include( "config.php" );

if(isset($_POST['formconnexion'])) {
   $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($pseudoconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND motdepasse = ?");
      $requser->execute(array($pseudoconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: add.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Le pseudo ou le mot de passe est invalide !";
      }
   } else {
      $erreur = "Tous les champs ne sont pas complétés";
   }
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body class="align">

  <div class="grid">

<form method="POST" action="" class="form login">

      <header class="login__header">
	    <img src="https://lossantospolicedepartmentlspd.weebly.com/uploads/2/5/6/4/25644844/6606452.png">
        <h3 class="login__title">LSPD ACCES</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="pseudo" name ="pseudoconnect" placeholder="Pseudo">
        </div>

        <div class="form__field">
          <input type="password" name="mdpconnect" placeholder="Mot de passe">
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Connexion" name="formconnexion">

      </footer>

    </form>
<?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  </div>

</body>
  
  
</body>
</html>
