<?php
    if (isset($_POST['usersLoginButton'])) {
        
        $userLoginInErrors = array();

        $usersEmailToLogIn = sanitize($_POST['userLoginUsername']);
        $usersCodeToLogIn = md5(sanitize($_POST['userLoginPassword']));

        //check for errors
        //checking if the input field are empty

        if (empty($usersEmailToLogIn)) {
            
            $userLoginInErrors[] = "Email address is needed";
        }


        if (empty($usersCodeToLogIn)) {
            
            $userLoginInErrors[] = "Password is required";
        }

        //check , if the details entered is not available

        if (!empty($usersEmailToLogIn) && !empty($usersCodeToLogIn)) {

            
            $getTheUserEmailDetails = "SELECT * FROM userregistrationdetails WHERE emailOfUser = '$usersEmailToLogIn' AND passCodeOfuser = '$usersCodeToLogIn' LIMIT 1";
            $queryGetTheUserEmailDetails = mysqli_query($connect,$getTheUserEmailDetails);

            if (!$queryGetTheUserEmailDetails) {

                die("could not query GET THE USER EMAIL DETAILS" .mysqli_error($connect));
            }
          
            $fetchTheUserDet = mysqli_fetch_assoc($queryGetTheUserEmailDetails);

            $fetchTheUserDetEmailAdd = $fetchTheUserDet['emailOfUser'];
            $fetchTheUserDetPassWord = $fetchTheUserDet['passCodeOfuser'];


            if ($fetchTheUserDetEmailAdd != $usersEmailToLogIn && $fetchTheUserDetPassWord != $usersCodeToLogIn) {

                $userLoginInErrors[] = "Username or password is incorrect";

            }



        }


        //if no error is found, then allow to login

        if (empty($userLoginInErrors)) {
            
            $getCorrectUserDetails = "SELECT * FROM userregistrationdetails WHERE emailOfUser = '$usersEmailToLogIn' LIMIT 1";

            $queryGetCorrectUserDetails = mysqli_query($connect,$getCorrectUserDetails);


            if (!$queryGetCorrectUserDetails) {
                
                die("could not query GET CORRECT USER DETAILS" .mysqli_error($connect));
            }

            $rowCount = mysqli_num_rows($queryGetCorrectUserDetails);

            if ($rowCount = 1) {
                
                $fetchCorrectUserDetails = mysqli_fetch_assoc($queryGetCorrectUserDetails);

                $_SESSION['usersLoggedInId'] = $fetchCorrectUserDetails['idForUser'];

                header("Location:dashboard.php");
                exit();
            }
        }else{

            $usersLogInErrMessages = "<ul>";

            foreach($userLoginInErrors as $userLoginInError){

                $usersLogInErrMessages .= "<li>{$userLoginInError}</li>";

            }

            $usersLogInErrMessages .= "</ul>";
        }



    }

?>