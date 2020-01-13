<?php
    include '../src/scripts/php/DBConnection.php'; 
    //open connection to mysql db
    

    //fetch table rows from mysql db
   
   

    //create an array
    $JsonAr = array();
    //for every skill in allSKilss array get number of uses
   
        $SQL = "SELECT    COUNT(id) as Joins 
        FROM      user 
        WHERE     YEAR(date_of_join) = '2019' 
        GROUP BY  MONTH(date_of_join)";
        
        
        
    
       
         $DatabaseResult = mysqli_query($DatabaseConnection,$SQL); 
        while($row =mysqli_fetch_assoc($DatabaseResult)){

        $JsonAr[] = $row  ;
    }
  //  echo json_encode($emparray);
    
   

    //close the db connection
    mysqli_close($DatabaseConnection);
    
//write to json file
$fp = fopen('UsersJoining.json', 'w');
fwrite($fp, json_encode($JsonAr));
fclose($fp);



?>