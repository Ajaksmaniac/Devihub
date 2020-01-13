<?php
                     include '../src/scripts/php/DBConnection.php'; 
                    //open connection to mysql db
                    
               
                    //fetch table rows from mysql db
                   
                   
                
                    //create an array
                    $JsonAr = array();
                    //for every skill in allSKilss array get number of uses
                   
                        $SQL = "SELECT
                        case when age < 18 then 'Under 18'
                             when age > 18 and age < 25 then  'Over 18'
                                      when age > 25 and age < 35 then  'Over 25'
                                      when age > 35 and age < 45 then  'Over 35'
                                      when age > 45 and age < 50 then  'Over 45'
                                      when age >  50 then  'Over 50'
                             else  '18-50' end as 'age',
                        count(*) as count
                      from (select FLOOR(DATEDIFF(  CURDATE(),`date_of_birth`)/365) as age from user) c
                      group by case when age < 18 then 'Under 18'
                         when age > 18 and age < 25 then  'Over 18'
                                      when age > 25 and age < 35 then  'Over 25'
                                      when age > 35 and age < 45 then  'Over 35'
                                      when age > 45 and age < 50 then  'Over 45'
                                      when age >  50 then  'Over 50'
                      
                         else  '18-50' end
                    
                        ";
                         $DatabaseResult = mysqli_query($DatabaseConnection,$SQL); 
                        while($row =mysqli_fetch_assoc($DatabaseResult)){

                        $JsonAr[] = $row  ;
                    }
                  //  echo json_encode($emparray);
                    
                   
                
                    //close the db connection
                    mysqli_close($DatabaseConnection);
                    
                //write to json file
                $fp = fopen('user_ages.json', 'w');
                fwrite($fp, json_encode($JsonAr));
                fclose($fp);

                ?>