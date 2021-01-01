<?php
   require_once("../auth-owners/login-own-auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container-fluid">
     <div class="row justify-content-center">
          <div class="col-lg-6" style="margin-top:300px;">
             <?php
                if (isset($ownerErrorMessage)) {
                    echo "<div class='alert alert-danger'>$ownerErrorMessage</div>";
                }
             ?>
              <h1 class="text-center pb-5"> Welcome, Shop Owner</h1>

              <div>
                  <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                      <div class="form-group">
                         <input type="text" placeholder="username or email" class="form-control" name="usersOfUser">
                      </div>

                      <div class="form-group">
                         <input type="password" placeholder="Password" class="form-control" name="passOfPass">
                      </div>

                      <div class="form-group" align="center">
                         <button type="submit" class="btn-lg" name="loginBut">Login</button>
                      </div>
                  </form>
              </div>

          </div>
     </div>
</div>


</body>
<script scr="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>

