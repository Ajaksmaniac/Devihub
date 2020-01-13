<?php
                     include '../src/scripts/php/DBConnection.php'; 
                    //open connection to mysql db
                    
               
                    //fetch table rows from mysql db
                   
                   
                
                    //create an array
                    $JsonAr = array();
                    //for every skill in allSKilss array get number of uses
                   
                        $SQL = "SELECT  
                        COUNT( case when sex='male' then 1 end ) as Male,
                        COUNT( case when sex='female' then 1 end ) as Female
                        FROM user 
                    
                        ";
                         $DatabaseResult = mysqli_query($DatabaseConnection,$SQL); 
                        while($row =mysqli_fetch_assoc($DatabaseResult)){

                        $JsonAr[] = $row  ;
                    }
                  //  echo json_encode($emparray);
                    
                   
                
                    //close the db connection
                    mysqli_close($DatabaseConnection);
                    
                //write to json file
                $fp = fopen('male_female_comparision.json', 'w');
                fwrite($fp, json_encode($JsonAr));
                fclose($fp);

                ?>