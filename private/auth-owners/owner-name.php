<?php

  require_once("../dbhandler/handler.php");
  require_once("../config.php");

  $loggedInAdmin = adminLoggedIn();
 

    function fullName($idOfOwner){
        
            global $connect;

        $adminName = "SELECT * FROM owners_adminlog WHERE ownersId = '$idOfOwner' ";



        $adminNameQuery = mysqli_query($connect,$adminName);

        if (!$adminNameQuery) {
            die("could not query ADMIN NAME QUERY " .mysqli_error($connect));
        }

        $fetchAdminName = mysqli_fetch_assoc($adminNameQuery);

        $theAdminFullName = $fetchAdminName['ownersName'];


         return $theAdminFullName;
    
           

    }

    fullName($loggedInAdmin);


?>