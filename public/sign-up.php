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




          <!-- upper side of shop page start from here -->
           
         <!-- <div class="container-fluid bg-primary">
                <div class="row">
                     <div class="col-12">
                           <h1 class="text-center" style="padding-top:150px; font-size:150px;">REGISTRATION PAGE</h1>
                     
                     </div>
                </div>
           
           </div>
            upper side of shop page ends here -->


           <!-- USER REGISTRATION FORM START FROM HERE -->

           
          <!-- USER LOGIN FORM START FROM HERE -->

          <div class="container-fluid mt-5" style="background-color:rgba(52,164,235,10%); ">
                <div class="row">

                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 bg-primary d-none d-md-block" style=" height:800px; border-radius:20px;" id="commentBox">
                                

                                <h1 style="top:25%; position:relative; text-align:center;">Hello Visitor!!!</h1>
                                <p class="text-center" style="top:25%; position:relative;">To stay Connected with, locate your lost properties and sell more<br>Login with your registered details</p>
                                
                                <div align="center" style="top:30%; position:relative;">
                                    <a href="sign-in.php"><button class="btn btn-light btn-lg" style="width:250px;">Login</button></a>
                                </div>     
                            </div>



                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                            <h1 class="text-center pt-5" style="top:10%; position:relative;">REGISTER </h1>



                                    <form class="mt-4" name="userRegForm" style="top:10%; position:relative;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full name" name="nameOfRegForm" required>
                                        </div>
                                        <div id="nameErrOnUserReg" class="text-danger pl-4"></div>

                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address" name="emailOfRegForm" required>
                                        </div>
                                        <div id="emailErrOnUserReg" class="text-danger pl-4"></div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile Number" name="phoneOfRegForm" required>
                                        </div>
                                        <div id="phoneErrOnUserReg" class="text-danger pl-4"></div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="passWordOfRegForm" required>
                                        </div>
                                        <div id="passwordErrOnUserReg" class="text-danger pl-4"></div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassOfRegForm" required>
                                        </div>
                                        <div id="confirmPassErrOnUserReg" class="text-danger pl-4"></div>

                                        <div class="form-group" align="center">
                                            <button class="btn btn-dark">Register</button>
                                        </div>

                                        <div class="form-group d-lg-block d-xl-none" align="center">
                                            <span>Have account, click <span><a href="sign-in.php">Login</a>
                                        </div>
                                    </form>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="private/script/form-validation.js"></script>
    </html>



<script>




//validating user registration page

var userRegisterForm = document.forms.userRegForm;

var errorOnUserRegName = document.getElementById("nameErrOnUserReg");
var errorOnUserRegEmail = document.getElementById("emailErrOnUserReg");
var errorOnUserRegPhone = document.getElementById("phoneErrOnUserReg");
var errorOnUserRegPassword = document.getElementById("passwordErrOnUserReg");
var errorOnUserRegConfPass = document.getElementById("confirmPassErrOnUserReg");



function checkUserRegistrationName() {

    if (userRegisterForm.nameOfRegForm.value === "" || userRegisterForm.nameOfRegForm.value === null) {

        userRegisterForm.nameOfRegForm.style.borderColor = "red";
        errorOnUserRegName.innerHTML = "Please enter your Full name";

    } else if (userRegisterForm.nameOfRegForm.value.length < 6) {

        userRegisterForm.nameOfRegForm.style.borderColor = "red";
        errorOnUserRegName.innerHTML = "Pls reconfirm your name";

    } else {


        errorOnUserRegName.innerHTML = "";
        userRegisterForm.nameOfRegForm.style.borderColor = "green";



    }
}

userRegisterForm.nameOfRegForm.addEventListener("blur", checkUserRegistrationName, false);






function checkUserRegistrationEmail() {

if (userRegisterForm.emailOfRegForm.value === "" || userRegisterForm.emailOfRegForm.value === null) {

    userRegisterForm.emailOfRegForm.style.borderColor = "red";
    errorOnUserRegEmail.innerHTML = "Please enter your Email";

} else if (userRegisterForm.emailOfRegForm.value.indexOf('@') > userRegisterForm.emailOfRegForm.value.lastIndexOf('.')) {


    userRegisterForm.emailOfRegForm.style.borderColor = "red";
    errorOnUserRegEmail.innerHTML = "Enter Email address Correctly";



} else if (userRegisterForm.emailOfRegForm.value.indexOf('@') === -1) {

    userRegisterForm.emailOfRegForm.style.borderColor = "red";
    errorOnUserRegEmail.innerHTML = "Invalid Email address";

} else {


    errorOnUserRegEmail.innerHTML = "";
    userRegisterForm.emailOfRegForm.style.borderColor = "green";



}
}

userRegisterForm.emailOfRegForm.addEventListener("blur", checkUserRegistrationEmail, false);






function checkUserRegistrationPhone() {

if (userRegisterForm.phoneOfRegForm.value === "" || userRegisterForm.phoneOfRegForm.value === null) {

    userRegisterForm.phoneOfRegForm.style.borderColor = "red";
    errorOnUserRegPhone.innerHTML = "Please enter your Mobile Number";

} else if (userRegisterForm.phoneOfRegForm.value.length < 11 || userRegisterForm.phoneOfRegForm.value.length > 11) {
    
    userRegisterForm.phoneOfRegForm.style.borderColor = "red";
    errorOnUserRegPhone.innerHTML = "Check your mobile number";

}else if (!Number(userRegisterForm.phoneOfRegForm.value)) {

    userRegisterForm.phoneOfRegForm.style.borderColor = "red";
    errorOnUserRegPhone.innerHTML = "Number must be entered";

} else {

    userRegisterForm.phoneOfRegForm.style.borderColor = "green";
    errorOnUserRegPhone.innerHTML = "";

}
}

userRegisterForm.phoneOfRegForm.addEventListener("blur", checkUserRegistrationPhone, false);






function checkUserRegistrationPassCode() {

if (userRegisterForm.passWordOfRegForm.value === "" || userRegisterForm.passWordOfRegForm.value === null) {

    userRegisterForm.passWordOfRegForm.style.borderColor = "red";
    errorOnUserRegPassword.innerHTML = "Please enter your Password";

} else if (userRegisterForm.passWordOfRegForm.value.length < 6) {
    
    userRegisterForm.passWordOfRegForm.style.borderColor = "red";
    errorOnUserRegPassword.innerHTML = "Password too short";

} else {

    userRegisterForm.passWordOfRegForm.style.borderColor = "green";
    errorOnUserRegPassword.innerHTML = "";

}
}

userRegisterForm.passWordOfRegForm.addEventListener("blur", checkUserRegistrationPassCode, false);



function checkUserRegistrationConfirmPassCode() {

if (userRegisterForm.confirmPassOfRegForm.value === "" || userRegisterForm.confirmPassOfRegForm.value === null) {

    userRegisterForm.confirmPassOfRegForm.style.borderColor = "red";
    errorOnUserRegConfPass.innerHTML = "Confirm your Password";

} else if (userRegisterForm.confirmPassOfRegForm.value.length < 6) {
    
    userRegisterForm.confirmPassOfRegForm.style.borderColor = "red";
    errorOnUserRegConfPass.innerHTML = "Password too short";

}else if (userRegisterForm.confirmPassOfRegForm.value != userRegisterForm.passWordOfRegForm.value) {

    userRegisterForm.confirmPassOfRegForm.style.borderColor = "red";
    errorOnUserRegConfPass.innerHTML = "Password does not match";

} else {

    userRegisterForm.confirmPassOfRegForm.style.borderColor = "green";
    errorOnUserRegConfPass.innerHTML = "";

}
}

userRegisterForm.confirmPassOfRegForm.addEventListener("blur", checkUserRegistrationConfirmPassCode, false);

</script>