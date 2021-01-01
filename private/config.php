<?php
  DEFINE("DBSERVER","localhost");
  DEFINE("DBUSER","root");
  DEFINE("DBNAME","toluwalase");
  DEFINE("DBPASS","");

  //connect to the server

  $connect = mysqli_connect(DBSERVER,DBUSER,DBPASS);


  if (!$connect) {
      
    die("could not connect to the server" .mysqli_error($connect));
  }
  
    //connect to the database

    $db_connect = mysqli_select_db($connect,DBNAME);

    if (!$db_connect) {
        
        die("could not connect to the database" .mysqli_error($connect));
    }

?>