<?php
  
    
    if (isset($_POST['userRegButton'])) {
        
        $userRegErrors = array();

        $theFullnamesOfUsers = sanitize($_POST['nameOfRegForm']);
        $theEmailOfUsers = sanitize($_POST['emailOfRegForm']);
        $thePhoneOfUsers = sanitize($_POST['phoneOfRegForm']);
        $thePassOfUsers = md5(sanitize($_POST['passWordOfRegForm']));
        $thePassConfirmOfUsers = md5(sanitize($_POST['confirmPassOfRegForm']));

        //check for error
//checking for full name
        if (empty($theFullnamesOfUsers)) {
            
            $userRegErrors[] = "Full name is needed";
        }

        if (!empty($theFullnamesOfUsers) && strlen($theFullnamesOfUsers) < 10) {
            $userRegErrors[] = "Please confirm your name";
        }


        // checking for email
        if (empty($theEmailOfUsers)) {
            
            $userRegErrors[] = "Email Address is needed";
        }


        if (!filter_var($theEmailOfUsers,FILTER_VALIDATE_EMAIL)) {

            $userRegErrors[] = "Incorrect Email Address";
        }


        if (!empty($theEmailOfUsers)) {
            
            $getInsertedEmailDetails = "SELECT * FROM userregistrationdetails WHERE emailOfUser = '$theEmailOfUsers' ";

            $queryGetInsertEmailDetails = mysqli_query($connect,$getInsertedEmailDetails);

            if (!$queryGetInsertEmailDetails) {
                
                die("could not query GET INSERT EMAIL DETAILS" .mysqli_error($connect));
            }

            $fetchEmailDetails = mysqli_fetch_assoc($queryGetInsertEmailDetails);

            $getTheEmailAddress = $fetchEmailDetails['emailOfUser'];

            if ($theEmailOfUsers === $getTheEmailAddress) {
                
                $userRegErrors[] = "Email Address already exist";

            }
        }


        //checking for phone number
        if (empty($thePhoneOfUsers)) {
            
            $userRegErrors[] = "Phone number is required";
        }

        if (!empty($thePhoneOfUsers) && strlen($thePhoneOfUsers) < 11 || strlen($thePhoneOfUsers) > 11) {

            $userRegErrors[] = "Please check your phone number";
        }

        if (!empty($thePhoneOfUsers) && !is_numeric($thePhoneOfUsers)) {

            $userRegErrors[] = "Numbers only";
        }



        //checking for password
        if (empty($thePassOfUsers)) {
            
            $userRegErrors[] = "Password is needed";
        }


        if (!empty($thePassOfUsers) && strlen($thePassOfUsers) < 6) {

            $userRegErrors[] = "Password should be greater than 6";
        }

        //checking for confirm password
        if (empty($thePassConfirmOfUsers)) {
            
            $userRegErrors[] = "Please Confirm Password";
        }

        if ($thePassOfUsers != $thePassConfirmOfUsers) {
            
            $userRegErrors[] = "Password does not match";

        }
        


        // if no error at all
        //then send the details to database

            if (empty($userRegErrors)) {
                
                $userRegisterDetails = "INSERT INTO userregistrationdetails(fullNameOfUser,emailOfUser,phoneOfUser,passCodeOfuser,userRegDate)";
               $userRegisterDetails .= " VALUES('$theFullnamesOfUsers','$theEmailOfUser','$thePhoneOfUsers','$thePassOfUsers', NOW()) ";

               $queryUserRegDetails = mysqli_query($connect,$userRegisterDetails);

               if (!$queryUserRegDetails) {
                   
                die("could not query USER REG DETAILS" .mysqli_error($connect));
               }

                  header("location:sign-up.php?regResult=successful");
                  exit();
            }else{

                $userRegErrorMessage = "<ul>";

                foreach ($userRegErrors as $userRegError) {

                    $userRegErrorMessage .= "<li>$userRegError</li>";
                }

                $userRegErrorMessage .= "</ul>";
            }
             
    

    }
?>