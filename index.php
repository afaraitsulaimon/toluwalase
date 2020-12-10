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


            <!-- carousel start from here -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active bg-primary">
       <ul class="nav navbar">
          <li class="d-none d-lg-block"><img src="images/ladies-jacket1.jpg" class="d-block w-20" alt="..."></li>
          <h4 style="position:absolute; color:green; padding-left:20px;">MY TOP JACKET</h4>
          <li><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <h4 style="position:absolute; color:white; padding-left:280px; font-weight:bolder;"><a href="">BEST TOPS</a></h4>
          <li class="d-none d-lg-block"><img src="images/ladies-jacket1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-jacket1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li><img src="images/ladies-jacket1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          
       </ul>
    </div>

    <div class="carousel-item bg-danger">
       <ul class="nav navbar">
         <li><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-pant1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li><img src="images/ladies-pant1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-pant1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-top2.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-pant1.jpg" class="d-block w-20" alt="..."></li>
        </ul>
    </div>

    <div class="carousel-item bg-dark">
      <ul class="nav navbar">
          <li class="d-none d-lg-block "><img src="images/ladies-skirt1.jpg" class="d-block w-20" alt="..."></li>
          <li><img src="images/ladies-jacket4.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-skirt1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-jacket4.jpg" class="d-block w-20" alt="..."></li>
          <li><img src="images/ladies-skirt1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-jacket4.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-skirt1.jpg" class="d-block w-20" alt="..."></li>
          <li class="d-none d-lg-block"><img src="images/ladies-jacket4.jpg" class="d-block w-20" alt="..."></li>
      </ul>
    </div>
  

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            <!-- carousel ends here -->





            <!--  3 box display start from here -->

            <div class="container-fluid mt-5">
                <div class="row justify-content-around">
                     <div class="col-lg-3 bg-primary">
                     <h3 class="text-center pb-4 pt-4">We Got you Covered</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                       
                     <div class="col-lg-3 bg-danger">

                     <h3 class="text-center pb-4 pt-4">We Deliver very fast</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-3 bg-secondary">
                     <h3 class="text-center pb-4 pt-4">We give you best of Fasion</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                </div>
            
            </div>

            <!--  3 box display ends here -->


            <!--Latest items start from here (this wwill be generated from a php code)-->

            <div class="container-fluid mt-4">
            <ul class="nav navbar bg-primary">
                <li><h4 class="">New Deals</h4></li>
                <li><a href="" class="text-decoration-none text-light">View More</a></li>
            </ul>
                 <div class="row justify-content-around">
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                 </div>
            </div>
            <!--Latest items ends here-->


            
            <!--Top display start from here -->

            <div class="container-fluid mt-4">
            <ul class="nav navbar bg-danger">
                <li><h4 class="">Tops</h4></li>
                <li><a href="" class="text-decoration-none text-light">View More</a></li>
            </ul>
            
                 <div class="row justify-content-around">
                 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                 </div>
            </div>
            <!--Top display ends here -->





          <!--Skirt display start from here -->

          <div class="container-fluid mt-4">
                      <ul class="nav navbar bg-dark">
                          <li><h4 class="">Skirts</h4></li>
                          <li><a href="" class="text-decoration-none text-light">View More</a></li>
                      </ul>
                      
                          <div class="row justify-content-around">
                          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                                    minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                                    officia nemo odit porro explicabo id quae quisquam cumque.<p>
                              </div>

                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                                    minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                                    officia nemo odit porro explicabo id quae quisquam cumque.<p>
                              </div>

                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                                    minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                                    officia nemo odit porro explicabo id quae quisquam cumque.<p>
                              </div>

                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                                    minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                                    officia nemo odit porro explicabo id quae quisquam cumque.<p>
                              </div>
                              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                                    minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                                    officia nemo odit porro explicabo id quae quisquam cumque.<p>
                              </div>
                          </div>
                      </div>
            <!--Skirt display ends here -->



             <!--Gown display start from here -->

             <div class="container-fluid mt-4">

                     <ul class="nav navbar bg-secondary">
                          <li><h4 class="">Gown</h4></li>
                          <li><a href="" class="text-decoration-none text-light">View More</a></li>
                      </ul>
            
                 <div class="row justify-content-around">
                 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                 </div>
            </div>
            <!--Gown display ends here -->


             <!--Jacket display start from here -->

             <div class="container-fluid mt-4">
                    <ul class="nav navbar bg-primary">
                          <li><h4 class="">Jacket</h4></li>
                          <li><a href="" class="text-decoration-none text-light">View More</a></li>
                      </ul>
            
                 <div class="row justify-content-around">
                 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                 </div>
            </div>
            <!--Jacket display ends here -->



             <!--Pants display start from here -->

             <div class="container-fluid mt-4">
                     <ul class="nav navbar bg-danger">
                          <li><h4 class="">Pants</h4></li>
                          <li><a href="" class="text-decoration-none text-light">View More</a></li>
                      </ul>
            
                 <div class="row justify-content-around">
                 <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>

                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat 
                          minima numquam eos qui delectus, sint natus aliquam quos iste vel fuga 
                          officia nemo odit porro explicabo id quae quisquam cumque.<p>
                     </div>
                 </div>
            </div>
            <!--Pants display ends here -->




       <!-- tips about the type of fashion we give start from here -->

             <div class="container-fluid">
                 <div class="row justify-content-around">
                      <div class="col-lg-3 bg-primary">
                         <p>
                            We give our customers an offline experince on an online platform
                            We give our customers an offline experince on an online platform
                            We give our customers an offline experince on an online platform
                            We give our customers an offline experince on an online platform
                            We give our customers an offline experince on an online platform
                            We give our customers an offline experince on an online platform
                         </p>
                      </div>

                      <div class="col-lg-3 bg-danger">
                         <p>
                            Party rocker is one thing we do best and what we really know our customers weill like
                            Party rocker is one thing we do best and what we really know our customers weill like
                            Party rocker is one thing we do best and what we really know our customers weill like
                            Party rocker is one thing we do best and what we really know our customers weill like
                            Party rocker is one thing we do best and what we really know our customers weill like
                            Party rocker is one thing we do best and what we really know our customers weill like
                         </p>
                      </div>

                      <div class="col-lg-3 bg-secondary">
                         <p>
                           Customer has opportunity to add more details and get to choose their colors
                           Customer has opportunity to add more details and get to choose their colors
                           Customer has opportunity to add more details and get to choose their colors
                           Customer has opportunity to add more details and get to choose their colors
                           Customer has opportunity to add more details and get to choose their colors
                           Customer has opportunity to add more details and get to choose their colors
                         </p>
                      </div>
                 
                 </div>
             </div>



             <div class="container-fluid mt-4">
                 <div class="row justify-content-around">
                      <div class="col-lg-3 bg-primary">
                         <p>
                            Ready to wear for any occasion is one of the top most of our products
                            Ready to wear for any occasion is one of the top most of our products
                            Ready to wear for any occasion is one of the top most of our products
                            Ready to wear for any occasion is one of the top most of our products
                            Ready to wear for any occasion is one of the top most of our products
                            Ready to wear for any occasion is one of the top most of our products
                         </p>
                      </div>

                      <div class="col-lg-3 bg-danger">
                         <p>
                            Customer get to negotiate for the item they like to purchase, the way they 
                            do when they work into a store or fashion shop.
                            Customer get to negotiate for the item they like to purchase, the way they 
                            do when they work into a store or fashion shop.
                            Customer get to negotiate for the item they like to purchase, the way they 
                            do when they work into a store or fashion shop.
                         </p>
                      </div>

                      <div class="col-lg-3 bg-secondary">
                         <p>
                           We make you look good day in day out even in your official wears
                           We make you look good day in day out even in your official wears
                           We make you look good day in day out even in your official wears
                           We make you look good day in day out even in your official wears
                           We make you look good day in day out even in your official wears
                           We make you look good day in day out even in your official wears
                         </p>
                      </div>
                 
                 </div>
             </div>

       <!-- tips about the type of fashion we give ends here -->

      
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
</html>

