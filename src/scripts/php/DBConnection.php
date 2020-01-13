<?php
        $DatabaseServerName = "localhost";
        $DatabaseUserName = "root";
        $DatabasePassword = "";
        $DatabaseName ="devihub";
         $DatabaseConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName, $DatabasePassword, $DatabaseName);
        
        if(!$DatabaseConnection){
            echo "Connection failed";
            
        }

?>