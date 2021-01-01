<?php
  require_once("../auth-owners/login-own-auth.php");
  

function adminLoggedIn(){

    if (isset($_SESSION['owners_id'])) {
        
        return $_SESSION['owners_id'];

    }else{

        return false;
    }
}

?>