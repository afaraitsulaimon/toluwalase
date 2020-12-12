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
                  include_once("public/header-menu.php");

            ?>




          <!-- upper side of contact us page start from here -->
           
          <div class="container-fluid bg-primary">
                <div class="row">
                     <div class="col-12">
                           <h1 class="text-center" style="padding-top:150px;">CONTACT US</h1>
                           <h5 class="text-center" style="padding-bottom:150px;">Reach us anytime of the day and we are here to serve you better</h5>
                     
                     </div>
                </div>
           
           </div>
           <!-- upper side of contact us page ends here -->



           <!-- contact us form and contact us details start from here -->


           <div class="container-fluid">
                      
                <div class="row justify-content-around">
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                          <form class="mt-5" name="contactUsForm">
                              <div class="form-group">
                                  <label>Full name:</label>
                                  <input type="text" class="form-control" name="fullNameOfContactForm">
                              </div>
                              <div id="nameErrOnContactForm" class="text-danger"></div>

                              <div class="form-group">
                                  <label>Email:</label>
                                  <input type="text" class="form-control" name="emailOfContactForm">
                              </div>
                              <div id="emailErrOnContactForm"  class="text-danger"></div>

                              <div class="form-group">
                                  <label>Phone:</label>
                                  <input type="text" class="form-control" name="phoneOfContactForm">
                              </div>
                              <div id="phoneErrOnContactForm" class="text-danger"></div>


                              <div class="form-group">
                                  <label>Message:</label>
                                  <textarea class="form-control" style="height:150px;" name="messageOfContactForm"></textarea>
                              </div>
                              <div id="messageErrOnContactForm" class="text-danger"></div>

                              <div class="form-group">
                                   <button class="btn btn-primary">Enquiry</button>
                              </div>
                          </form>
                     </div>


                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
                            <h5>CONTACT DETAILS</h5>

                            <p>
                      Address:<br>Toluwalase Fashion Home<br>
                      Benson Akinyele street,Oke-Afa,Isolo,<br>
                      100264, Lagos,Nigeria.<br><br>
                            </p>

                      <p>Phone: 08186657295</p>
                      <p>Email:  customerservice@toluwalase.com.ng</p>
                      <h4 class="pt-2">Join Us on Social Media</h4>
                      <ul class="nav navbar">
                          <li><a href="www.facebook.com/toluwalasefashionhome" class="fa fa-facebook text-decoration-none text-light"></a></li>
                          <li><a href="www.twitter.com/toluwalasefashionhome" class="fa fa-twitter text-decoration-none text-light"></a></li>
                          <li><a href="www.instagram.com/toluwalasefashionhome" class="fa fa-instagram text-decoration-none text-light"></a></li>
                          
                      </ul>
                     </div>
                </div>
           
           </div>
           <!-- contact us form and contact us details end here -->








      
      <!-- footer starts from here -->

         <?php
              require_once("public/footer.php");
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

