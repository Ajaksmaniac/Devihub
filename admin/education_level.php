<?php
                     include '../src/scripts/php/DBConnection.php'; 
                    //open connection to mysql db
                    
               
                    //fetch table rows from mysql db
                   
                   
                
                    //create an array
                    $JsonAr = array();
                    //for every skill in allSKilss array get number of uses
                   
                        $SQL = "SELECT  
                        COUNT( case when education='Academic Studies' then 1 end AND case when sex='male' then 1 end ) as 'ASM' ,
                        COUNT( case when education='Academic Studies' then 1 end AND case when sex='female' then 1 end ) as 'ASF' ,
COUNT( case when education='High school' then 1 end  AND case when sex='male' then 1 end) as 'HSM',
                        COUNT( case when education='High school' then 1 end  AND case when sex='female' then 1 end) as 'HSF',
COUNT( case when education='Elementary School' then 1 end AND case when sex='male' then 1 end ) as 'ESM',
                        COUNT( case when education='Elementary School' then 1 end AND case  when sex='female' then 1 end ) as 'ESF',
COUNT( case when education='Self Tought' then 1 end AND case when sex='male' then 1 end ) as 'STM',
                        COUNT( case when education='Self Tought' then 1 end AND case when sex='female' then 1 end ) as 'STF'
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
                $fp = fopen('education_level.json', 'w');
                fwrite($fp, json_encode($JsonAr));
                fclose($fp);

                ?>