<?php
     
          include 'DBConnection.php';
          session_start();                    
          $uid = $_SESSION['id'];
          mysqli_query($DatabaseConnection, "UPDATE user SET logged = 'false' WHERE id = '$uid'");
          session_destroy();
          header("Location: ./../../../index.php" );
     

    
       
        
?>