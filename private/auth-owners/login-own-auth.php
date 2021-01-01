<?php

 ob_start();
   require_once("../config.php");
   

   if (isset($_POST['loginBut'])) {
       
      $theOwnerUserOrEmail = trim($_POST['usersOfUser']);
      $theOwnerPassCode = trim(md5($_POST['passOfPass']));

    

      $ownersLoginErrors = array();


      //check for error

      if (empty($theOwnerUserOrEmail)) {
          
        $ownersLoginErrors[] = "Username or Email is required";
      }


      if (empty($theOwnerPassCode)) {
          
        $ownersLoginErrors[] = "Password is required";
      }


      $compareDetails = "SELECT * FROM owners_adminlog WHERE emailOfOwners = '$theOwnerUserOrEmail' OR usersNameOfOwners = '$theOwnerUserOrEmail' ";



      $compareDetSql = mysqli_query($connect,$compareDetails);

      if (!$compareDetSql) {
          
        die("could not query COMPAREDETSQL" .mysqli_error($connect));
      }

      $fetchCompareDet = mysqli_fetch_assoc($compareDetSql);

      $theAdmEmail = $fetchCompareDet['emailOfOwners'];
      $theAdmUsername = $fetchCompareDet['usersNameOfOwners'];
      $theAdmPass =  $fetchCompareDet['shoppyPassWord'];
      $theAdmName = $fetchCompareDet['ownersName'];

      //check if the username/email address and password matches
      //if not throw error

      if ($theOwnerUserOrEmail != $theAdmEmail && $theAdmPass != $theOwnerPassCode || $theOwnerUserOrEmail != $theAdmUsername && $theAdmPass != $theOwnerPassCode) {

        $ownersLoginErrors[] = "Username or Password is Incorrect";

      }

      //check if no error
      //then login

      if (empty($ownersLoginErrors)) {
          
        $ownerLoginDetails = "SELECT * FROM owners_adminlog WHERE emailOfOwners = '$theOwnerUserOrEmail' AND shoppyPassWord = '$theOwnerPassCode' ";


        $queryOwnersLogin = mysqli_query($connect,$ownerLoginDetails);
      
        $countRows = mysqli_num_rows($queryOwnersLogin);

         //check if the nos of rows gotten is 1
         //if it is, then fetch the details and store ID in session
        if ($countRows = 1) {
           
           $fetchOwnersLoginDet = mysqli_fetch_assoc($queryOwnersLogin);
           $_SESSION['owners_id'] = $fetchOwnersLoginDet['ownersId'];
        

        }

        header("location:dash-board-admin.php");
        exit();

      }else{
           $ownerErrorMessage = "<ul>";

          foreach($ownersLoginErrors as $ownersLoginError){
            
            $ownerErrorMessage .= "<li>{$ownersLoginError}</li>";

          }

          $ownerErrorMessage .= "</ul>";

      }

   }


   ob_flush();
?>

