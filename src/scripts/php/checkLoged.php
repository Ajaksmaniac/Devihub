<?php

    
    //checks if users is logged

 function checkLoged(){ 
    if(isset($_SESSION['id'],$_SESSION['username'])){
        
       return true;

    }else{
        return false;
    }
}
 ?>