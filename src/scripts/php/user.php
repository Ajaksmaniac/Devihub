<?php
include 'DBConnection.php';

    class User  {
       
        public $uid ;
        public $userName ;
        public $userSurname;
        public $picture;
        public $php = false;
        public $java = false;
        public $html = false;
        public $css = false;
        public  $js = false;
        public  $python = false;
        public  $cpp = false;
        public $cs = false;
        public  $c = false;
        public $ruby = false;
        public $unity = false;
        public $DOTNET = false;
        public $java_spring = false;
        public $node_js = false;
        public  $laravel = false;
        public  $mvc = false;
        public $perl = false;
        public $cobalt = false;
        public $pascal = false;
        public  $mathlab = false;
        public $swift = false;
        public  $kotlin = false;
        


        
        
        

        function __construct($uid){
            $this->uid = $uid;
            
        }
        function changeUsername($to){
            global $DatabaseConnection;
            $SQL = "UPDATE user
            SET username = '$to'
          WHERE id = $this->uid";
          $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
        }
        function changePassword($to){
            global $DatabaseConnection;
            $SQL = "UPDATE user
            SET password = '$to'
          WHERE id = $this->uid";
          $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
        }
        function changeEmail($to){
            global $DatabaseConnection;
            $SQL = "UPDATE user
            SET email = '$to'
          WHERE id = $this->uid";
          $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
        }
        function changeName($to){
            global $DatabaseConnection;
            $SQL = "UPDATE user
            SET name = '$to'
          WHERE id = $this->uid";
          $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
        }
        function changeSurname($to){
            global $DatabaseConnection;
            $SQL = "UPDATE user
            SET surname = '$to'
          WHERE id = $this->uid";
          $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
        }

        function getSkills($uid){
          /*  $DatabaseServerName = "localhost";
            $DatabaseUserName = "root";
            $DatabasePassword = "";
            $DatabaseName ="devihub";
             $DatabaseConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName, $DatabasePassword, $DatabaseName);
            
            if(!$DatabaseConnection){
                echo "Connection failed";
                
            }*/

            global $DatabaseConnection;
            $getSkillsSQL = 
            "SELECT 
                *
            FROM
                skills
            WHERE
                skills_id = '$uid';";
            $DatabaseResult = mysqli_query($DatabaseConnection,$getSkillsSQL);
            while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                
        
                //$skills = array();
                $this->php = $row['php'];
                $this->java = $row['java'];
                $this->html = $row['html'];
                $this->css = $row['css'];
                $this->js = $row['js'];
                $this->python = $row['python'];
                $this->cpp = $row['c++'];
                $this->cs = $row['c#'];
                $this->c = $row['c'];
                $this->ruby = $row['ruby'];
                $this->unity = $row['unity'];
                $this->DOTNET = $row['.net'];
                $this->java_spring = $row['java spring'];
                $this->node_js = $row['node js'];
                $this->laravel = $row['laravel'];
                $this->mvc = $row['mvc'];
                $this->perl = $row['perl'];
                $this->cobalt = $row['cobol'];
                $this->pascal = $row['pascal'];
                $this->mathlab = $row['mathlab'];
                $this->swift = $row['swift'];
                $this->kotlin = $row['kotlin'];
        
        
        
        
                
            }
            
        }

        function getCountry($uid){
            global $DatabaseConnection;
            $SQL = "SELECT  username,printable_name as name  FROM user,country WHERE  user.id = $uid AND user.countryID = country.countryID";
            $result = mysqli_query($DatabaseConnection, $SQL);
            $row = mysqli_fetch_assoc($result);
            $countryName = $row['name'];
            echo "Country: ". $countryName. "<br>";
        }
        function printSkills($uid){
            $this->getSkills($uid);
            echo '<p>';
            if($this->java == 'true'){
                echo " java <br>";
            } 
            if($this->html == 'true'){
                echo " html <br>";
            } 
            if($this->css == 'true'){
                echo " css <br>";
            } 
            if($this->js == 'true'){
                echo " js <br>";
            } 
            if($this->python == 'true'){
                echo " python <br>";
            } 
            if($this->php == 'true'){
                echo " php <br>";
            } 
            if($this->cpp == 'true'){
                echo " cpp <br>";
            } 
            if($this->cs == 'true'){
                echo " cs <br>";
            } 
            if($this->c == 'true'){
                echo " c <br>";
            } 
            if($this->ruby == 'true'){
                echo " ruby <br>";
            } 
            if($this->unity == 'true'){
                echo "unity <br>";
            } 
            if($this->DOTNET == 'true'){
                echo "DOTNET <br>";
            } 
            if($this->java_spring == 'true'){
                echo "java_spring <br>";
            } 
            if($this->java_spring == 'true'){
                echo "java_spring <br>";
            } 
            if($this->node_js == 'true'){
                echo "node_js <br>";
            } 
            if($this->laravel == 'true'){
                echo "laravel <br>";
            } 
            if($this->mvc == 'true'){
                echo "mvc <br>";
            } 
            if($this->perl == 'true'){
                echo "perl <br>";
            } 
            if($this->cobalt == 'true'){
                echo "cobalt <br>";
            }
            if($this->pascal == 'true'){
                echo "pascal <br>";
            }
            if($this->mathlab == 'true'){
                echo "mathlab <br>";
            }
            if($this->swift == 'true'){
                echo "swift <br>";
            }
            if($this->kotlin == 'true'){
                echo "kotlin <br>";
            }
            echo '</p>';
            
        }
        function getUserInfo($uid){
           /* $DatabaseServerName = "localhost";
            $DatabaseUserName = "root";
            $DatabasePassword = "";
            $DatabaseName ="devihub";
             $DatabaseConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName, $DatabasePassword, $DatabaseName);
            
            if(!$DatabaseConnection){
                echo "Connection failed";
                
            }*/


            global $DatabaseConnection;
            $SQL = "SELECT name, surname FROM user WHERE id = '$uid';";

            $result = mysqli_query($DatabaseConnection, $SQL);
            while ($row = mysqli_fetch_assoc($result)){

              
               $this->userName = $row['name'];
               $this->userSurname = $row['surname'];
               

            }   
            


        }
        
        function getUserName($uid){
            global $DatabaseConnection;
            $SQL = "SELECT name FROM user WHERE id = '$uid';";

            $result = mysqli_query($DatabaseConnection, $SQL);
            while ($row = mysqli_fetch_assoc($result)){

              
               $userName = $row['name'];
              
               

            }   
            echo $userName;
        }
        function getUserSurname($uid){
            global $DatabaseConnection;
            $SQL = "SELECT surname FROM user WHERE id = '$uid';";

            $result = mysqli_query($DatabaseConnection, $SQL);
            while ($row = mysqli_fetch_assoc($result)){

              
               $userSurname = $row['surname'];
              
               

            }   
            echo  $userSurname;
        }
        function getRegisterYear($uid){
            global $DatabaseConnection;
            $SQL = "SELECT YEAR(date_of_join) as dat from user WHERE id = $uid";
            $result = mysqli_query($DatabaseConnection, $SQL);
            $row = mysqli_fetch_assoc($result);
             echo "Join year: ".$row['dat']. "<br>";
           
        }
        function getAge($uid){
            global $DatabaseConnection;
            $SQL = "SELECT FLOOR(DATEDIFF(  CURDATE(),`date_of_birth`)/365) as age  FROM user 
            WHERE id = $uid
            ";
             $result = mysqli_query($DatabaseConnection, $SQL);
             $row = mysqli_fetch_assoc($result);
              echo "Age: ".$row['age']. "<br>";
        }
        function createDiv($uid, $selectedSkill){
           
            $selectedSkill = explode (" ", $selectedSkill);  
            $this->getProfilePicture($uid);
			echo '<div class="post">';
            echo '<div id= "post-left">';
             if($this->picture != null){
                echo '<img src="data:image/png;base64,'.base64_encode( $this->picture ).'"  width="200" height="200"/>';
            }else{
                echo '<img src="src/img/DefaultProfile.png" width="200" height="200">';
            }
            
            
            /*<img src="data:image/jpeg;base64,'.base64_encode( $this->picture ).'"  width="200" height="220"/>*/
            echo '</div>';
			
            echo '<div id = "post-right">';
            echo '<a href="profile.php?id='.$uid.'"><p class="post-title">' . $this->userName . '  ' . $this->userSurname . '</p></a>';
            $this->getCountry($uid);
            $this->getRegisterYear($uid); 
            $this->getAge($uid);
            echo '<p class="post-description">';
           //print_r ($selectedSkill);
            if($this->java == 'true'){
                if (in_array('java', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>java</p> ";
                }else{
                    echo "<p class='tech'>javap</p>";
                }

                 
            } 
            if($this->html == 'true'){
                if (in_array('html', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>html</p> ";
                }else{
                    echo "<p class='tech'>html</p>";
                }
            } 
            if($this->css == 'true'){
                if (in_array('css', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>css</p> ";
                }else{
                    echo "<p class='tech'>css</p>";
                }
            } 
            if($this->js == 'true'){
                if (in_array('js', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>js</p> ";
                }else{
                    echo "<p class='tech'>js</p>";
                }
            }
            if($this->python == 'true'){
                if (in_array('python', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>python</p> ";
                }else{
                    echo "<p class='tech'>python</p>";
                }
            } 
            if($this->php == 'true'){
                if (in_array('php', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>php</p> ";
                }else{
                    echo "<p class='tech'>php</p>";
                }
            } 
            if($this->cpp == 'true'){
                if (in_array('`c++`', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>c++</p> ";
                }else{
                    echo "<p class='tech'>c++</p>";
                }
            } 
            if($this->cs == 'true'){
                if (in_array('`c#`', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>c#</p> ";
                }else{
                    echo "<p class='tech'>c#</p>";
                }
            } 
            if($this->c == 'true'){
                if (in_array('c', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>c</p> ";
                }else{
                    echo "<p class='tech'>c</p>";
                }
            } 
            if($this->ruby == 'true'){
                if (in_array('ruby', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>ruby</p> ";
                }else{
                    echo "<p class='tech'>ruby</p>";
                }
            } 
            if($this->unity == 'true'){
                if (in_array('unity', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>unity</p> ";
                }else{
                    echo "<p class='tech'>unity</p>";
                }
            } 
            if($this->DOTNET == 'true'){
                if (in_array('.net', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>.net</p> ";
                }else{
                    echo "<p class='tech'>.net</p>";
                }
            } 
            if($this->java_spring == 'true'){
                if (in_array('jsp', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>JSP</p> ";
                }else{
                    echo "<p class='tech'>JSP</p>";
                }
            } 
            if($this->node_js == 'true'){
                if (in_array('nodejs', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>node_js</p> ";
                }else{
                    echo "<p class='tech'>node_js</p>";
                }
            } 
            if($this->laravel == 'true'){
                if (in_array('laravel', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>laravel</p> ";
                }else{
                    echo "<p class='tech'>laravel</p>";
                }
            } 
            if($this->mvc == 'true'){
                if (in_array('mvc', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>mvc</p> ";
                }else{
                    echo "<p class='tech'>mvc</p>";
                }
            } 
            if($this->perl == 'true'){
                if (in_array('perl', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>perl</p> ";
                }else{
                    echo "<p class='tech'>perl</p>";
                }
            } 
            if($this->cobalt == 'true'){
                if (in_array('cobol', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>cobol</p> ";
                }else{
                    echo "<p class='tech'>cobol</p>";
                }
            }
            if($this->pascal == 'true'){
                if (in_array('pascal', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>pascal</p> ";
                }else{
                    echo "<p class='tech'>pascal</p>";
                }
            }
            if($this->mathlab == 'true'){
                if (in_array('mathlab', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>mathlab</p> ";
                }else{
                    echo "<p class='tech'>mathlab</p>";
                }
            }
            if($this->swift == 'true'){
                if (in_array('swift', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>swift</p> ";
                }else{
                    echo "<p class='tech'>swift</p>";
                }
            }
            if($this->kotlin == 'true'){
                if (in_array('kotlin', $selectedSkill, TRUE)) { 
                    echo "<p class='found'>kotlin</p> ";
                }else{
                    echo "<p class='tech'>kotlin</p>";
                }
            }

            echo '</p>';
			echo'</div>';
            echo "</div>";
           
           
        }
        function getProfilePicture($uid){
            $SQL = "SELECT profile_picture 
            FROM user
            WHERE id = $uid;
            ";
            /* $DatabaseServerName = "localhost";
             $DatabaseUserName = "root";
             $DatabasePassword = "";
             $DatabaseName ="devihub";
              $DatabaseConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName, $DatabasePassword, $DatabaseName);
             
             if(!$DatabaseConnection){
                 echo "Connection failed";
                 
             }*/
              global $DatabaseConnection;
            
 
             $result = mysqli_query($DatabaseConnection, $SQL);
             while ($row = mysqli_fetch_assoc($result)){
 
               
                $this->picture = $row['profile_picture'];

              
                
 
             }
             
             
             
            
        }
        


        function registerUser($uid,$name,$surname, $username, $password, $email, $SQLSkills,$gender, $country,$dateOfJoin){
            global $DatabaseConnection ;
            
            $SQL = "INSERT INTO user (id, email,username, password, sex,group_id,status,name,surname,skills_id,times_searched,profile_picture,countryID,date_of_join)
            VALUES ($uid,'$email', '$username', '$password', '$gender', 3 , 'active','$name','$surname',$uid, 0 , null, $country,'$dateOfJoin')";
            $result = mysqli_query($DatabaseConnection, $SQL);
            
            
          echo $SQL;
            $resulttwo = mysqli_query($DatabaseConnection, $SQLSkills);
            echo "REGISTERED!";
           
            
            
           
        }



        public function randomDate($start_date, $end_date){
            // Convert to timetamps
                $min = strtotime($start_date);
                $max = strtotime($end_date);
        
            // Generate random number using above bounds
                $val = rand($min, $max);
        
            // Convert back to desired date format
                return date('Y-m-d', $val);
            }

        function generateUsers($number){
            global $DatabaseConnection ;
            $i = 0;
            while($i != $number){
                $getMaxId_SQL = "SELECT COUNT(id) as max FROM user";                            
                $result = mysqli_query($DatabaseConnection,$getMaxId_SQL);
                while($row = mysqli_fetch_assoc($result)){
                    $maxId = $row['max'];
                    
                }
                $currentId = $maxId +1;
                //str_replace("`","",$skillsStringSQL);
                //$skillsStringSQL = str_replace('`', '', $skillsStringSQL);
             
             //echo $trueSKillsString;
            // $dateOfJoin = randomDate('2019-01-01','2019-12-30');
                $SQL = "INSERT INTO user (id, email,username, password, sex,group_id,status,name,surname,skills_id,times_searched,profile_picture,countryID,date_of_join)
                VALUES ($currentId,'testuser.$currentId', 'testuser.$currentId', 'test', 'male', 3 , 'active','testuser.$currentId','testuser.$currentId',$currentId, 0 , null, $i,'$dateOfJoin')";
                $result = mysqli_query($DatabaseConnection, $SQL);
                
                $SQLSkills = "INSERT INTO skills (skills_id,php,java,kotlin) VALUES($currentId,'true','true','true')";
                $resultTWO = mysqli_query($DatabaseConnection, $SQLSkills);
                $i = $i+1;
            }
           

        }
       public function s($year){
        
     
            //Generate a random month.
            $month= mt_rand(1, 12);
         
        //Generate a random day.
            $day= mt_rand(1, 28);
         
        //Using the Y-M-D format.
            $randomDate = "$year" . "-" . $month . "-" . $day;
            return $randomDate;
        }

        function generateUsersBirthDate(){
            global $DatabaseConnection ;
            $getMaxId_SQL = "SELECT COUNT(id) as max FROM user";                            
            $result = mysqli_query($DatabaseConnection,$getMaxId_SQL);
            while($row = mysqli_fetch_assoc($result)){
                 $maxId = $row['max'];
                
            }
            $i = 1;
            while($i != $maxId+1){
           if($i < 10){
            $year = 1998;
           }else if($i >= 10 && $i < 25){
            $year = 1970;
           }else if($i >= 25 && $i < 40){
            $year = 1975;
           }else if($i >= 40 && $i < 50){
            $year = 1980;
           }else if($i >= 50 && $i < 60){
            $year = 1985;
           }else if($i >= 60 && $i < 70){
            $year = 1990;
           }
           else if($i >= 70){
            $year = 1995;
           }
           $month= mt_rand(1, 12);
         
        //Generate a random day.
            $day= mt_rand(1, 28);
         
        //Using the Y-M-D format.
            $randate = "$year-$month-$day";
            
            $date_of_birth = date('Y-m-d',strtotime($randate));
           echo $date_of_birth;
            $SQLInsertDate = "UPDATE user set date_of_birth = '$date_of_birth' WHERE id = $i";
            $result = mysqli_query($DatabaseConnection, $SQLInsertDate);
            $i = $i + 1;
            }
        }


    }

    
?>