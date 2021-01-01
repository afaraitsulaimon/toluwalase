<?php
   require_once("../auth-owners/login-own-auth.php");
   require_once("../dbhandler/handler.php");
   session_start();
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
     <div class="row">
         <div class="col-lg-12 bg-primary">
         <div class="topMenu">
                 <nav class="navbar navbar-light navbar-expand-md">


					<!-- Brand starts here-->
					<a class="navbar-brand text-dark" href="dashboard.php">
						<h1>TOLUWALASE</h1>
					</a>
                <!-- Brand ends here-->
					<!-- This display the users full name-->
					<div class="ml-auto" style="color:blue; font-size:1.5em; font-weight:bold;">Welcome 
					<?php 
					    echo "Toluwalase M. Afarait (C.E.O)"


					  ?>
					  </div>

					<!-- user dropdown starts from here -->


                    <div class="dropdown ml-auto">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php

                                                    
                                        require_once("../auth-owners/owner-name.php");
                                        
                                ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                           <a href="owners-signout.php"> <button class="dropdown-item" type="button">Sign Out</button></a>
                           <a href=""> <button class="dropdown-item" type="button">Change Password</button></a>
                           <a href=""> <button class="dropdown-item" type="button">Edit Profile</button></a>
                        </div>
                        </div>


                    <!-- user dropdown ends here -->


                 </nav>
            </div>
		  <!--Menu ends from here -->    
		  

		  </div>
         </div>
     </div>
</div>



<div class="container-fluid">
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="true">Order</a>
      <a class="nav-link" id="v-pills-postitem-tab" data-toggle="pill" href="#v-pills-postitem" role="tab" aria-controls="v-pills-postitem" aria-selected="false">Post Item</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9 bg-secondary">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">THIS is to dsiplay all orders placed by users </div>
      <div class="tab-pane fade" id="v-pills-postitem" role="tabpanel" aria-labelledby="v-pills-postitem-tab" align="center">
      <!-- the category selected will determine the type of sizes that will come out -->
            <form class="col-6">
                <h2>Post an Item</h2>
                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Item Name">
                </div>

                <div class="form-group">
                   <select class="form-control">
                        <option>Select Category</option>
                        <option>Dress</option>
                        <option>Top</option>
                        <option>Gown</option>
                        <option>Skirt</option>
                   </select>
                </div>

                <div class="form-group">
                   <select class="form-control">
                        <option>Select Sub-Category</option>
                        <option>Dress</option>
                        <option>Top</option>
                        <option>Gown</option>
                   </select>
                </div>


                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Burst Size">
                </div>

                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Waist size">
                </div>

                <div class="form-group">
                   <input type="text" class="form-control" placeholder="Lenght size">
                </div>

                <div class="form-group">
                   <textarea class="form-control" placeholder="Full Description"></textarea>
                </div>

                <div class="form-group">
                   <input type="submit" class="btn btn-light btn-lg">
                </div>


                
            </form>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">God blessing always</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">We made it ...Thank GOD</div>
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

