<?php
                     include '../src/scripts/php/DBConnection.php'; 
                    //open connection to mysql db
                    
                $allSkills =  array(
                    "php",
                    "java",
                    "html",
                    "css",
                    "js",
                    "python",
                    "`c++`",
                    "c#",
                    "c",
                    "ruby",
                    "unity",
                    "`.net`",
                    "`java spring`",
                    "`node js`",
                    "laravel",
                    "mvc",
                    "perl",
                    "cobol",
                    "pascal",
                    "mathlab",
                    "swift",
                    "kotlin");
                    //fetch table rows from mysql db
                   
                   
                
                    //create an array
                    $skillArray = array();
                    //for every skill in allSKilss array get number of uses
                    foreach ($allSkills as &$skill) {
                        $SQL = "SELECT  '$skill' as Name,
                        COUNT(skills_id) AS Known
                        FROM skills                        
                        WHERE $skill = 'true'
                        ";
                         $DatabaseResult = mysqli_query($DatabaseConnection,$SQL); 
                        while($row =mysqli_fetch_assoc($DatabaseResult)){

                        $skillArray[] = $row  ;
                    }
                  //  echo json_encode($emparray);
                    }
                   
                
                    //close the db connection
                    mysqli_close($DatabaseConnection);
                    
                //write to json file
                $fp = fopen('skilldata.json', 'w');
                fwrite($fp, json_encode($skillArray));
                fclose($fp);

                ?>