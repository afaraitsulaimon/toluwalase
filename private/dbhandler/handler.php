<?php  

  
  function sanitize($data){

    $data = trim($data);
    $data = strip_tags($data);
    return $data;
}


function adminLoggedIn(){

    if (isset($_SESSION['owners_id'])) {
        
        return $_SESSION['owners_id'];

    }else{

        return false;
    }
}

?>