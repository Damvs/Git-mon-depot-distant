<?php

  session_start();
  $_SESSION["login"] = "";
  $_SESSION["role"] = "";

  unset($_SESSION["login"]);
  unset($_SESSION["role"]);

  if (ini_get("session.use_cookies")) 
  {
    setcookie(session_name(), '', time()-1);
  }


  // Détruire la session.
  if(session_destroy())
  {
    // Redirection vers la page de connexion
    header("Location: login_form.php");
  }
?>