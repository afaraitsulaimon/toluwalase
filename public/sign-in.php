<?php
        require_once("../private/config.php");
        require_once("../private/dbhandler/handler.php");
        require_once("../private/users-authethication/users-login-auth.php");
        session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

 



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
    <title>Document</title>
</head>
<body>

            <?php
                  include_once("other-header.php");

            ?>




          <!-- USER LOGIN FORM START FROM HERE -->

          <div class="container-fluid mt-5" style="background-color:rgba(52,164,235,10%); border-radius:20px;">
                <div class="row">
                     <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" style="height:700px;">
                     <h1 class="text-center pt-5" style="top:25%; position:relative;">LOGIN </h1>

                     <?php
                        if (isset($usersLogInErrMessages)) {
                            
                            echo "<div class='alert alert-danger'>{$usersLogInErrMessages}</div>";
                        }
                     ?>

                          <form class="mt-4" name="userLoginForm" style="top:30%; position:relative;" method="POST">
                              <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Email address" name="userLoginUsername" required>
                              </div>
                              <div id="errOnUserLogin" class="text-danger pl-4"></div>

                              <div class="form-group">
                                   <input type="password" class="form-control" placeholder="Password" name="userLoginPassword" required>
                              </div>
                              <div id="errOnPassLogin" class="text-danger pl-4"></div>


                              <div class="form-group">
                                  <button class="btn btn-danger"> Forgot your password?</button>
                                  <button type="submit" class="btn btn-dark" style="float:right" name="usersLoginButton">Login</button>
                              </div>

                              <div class="form-group d-lg-block d-xl-none">
                                  <span>Don't have an Account? Click <span><a href="sign-up.php">Register now</a>
                              </div>
                          </form>
                              
                     </div>


                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 bg-primary d-none d-md-block" style="border-radius:20px;" id="commentBox">
                        <h1 class="text-center" style="top:30%; position:relative;">Welcome Back!!</h1>
                        <p class="text-center" style="top:35%; position:relative;">To Join, Enter your personal details and <br> start with the journey</p>

                        <div align="center" style="top:45%; position:relative;">
                        <a href="sign-up.php"><button class="btn btn-light btn-lg" id='regDisplayButton'>Register</button></a>
                        </div>


                     </div>
                </div>
           </div>

           <!-- USER REGISTRATION FORM ENDS HERE -->



      <!-- footer starts from here -->

         <?php
              require_once("footer.php");
         ?>

      <!-- footer ends here -->

</body>
<script scr="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../private/script/form-validation.js"></script>
    </html>

<script>
var userLoginForm = document.forms.userLoginForm;

var errorOnUsernameLoginForm = document.getElementById("errOnUserLogin");
var errorOnPassLoginForm = document.getElementById("errOnPassLogin");

function checkLoginUsername() {

if (userLoginForm.userLoginUsername.value === "" || userLoginForm.userLoginUsername.value === null) {

    userLoginForm.userLoginUsername.style.borderColor = "red";
    errorOnUsernameLoginForm.innerHTML = "Please enter your Username";

} else {


    errorOnUsernameLoginForm.innerHTML = "";
    userLoginForm.userLoginUsername.style.borderColor = "green";



}
}

userLoginForm.userLoginUsername.addEventListener("blur", checkLoginUsername, false);





function checkLoginPassWord() {

if (userLoginForm.userLoginPassword.value === "" || userLoginForm.userLoginPassword.value === null) {

    userLoginForm.userLoginPassword.style.borderColor = "red";
    errorOnPassLoginForm.innerHTML = "Please enter your Password";

} else {


    errorOnPassLoginForm.innerHTML = "";
    userLoginForm.userLoginPassword.style.borderColor = "green";



}
}

userLoginForm.userLoginPassword.addEventListener("blur", checkLoginPassWord, false);


</script>

