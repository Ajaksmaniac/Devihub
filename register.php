<!DOCTYPE html>
<html lang="en">
 <?php
    include 'assets/assets.php';
    //include 'src/scripts/php/connection.php';
    include 'src/scripts/php/user.php'; 
 
 ?>
 

</head>
<body class="barber_version">

    <!-- LOADER -->
	<?php include 'assets/header.php';?>

        <!-- Page Content -->
        

            <div id="barbers" class="section lb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <small>DeviHub</small>
                        <h3>REGISTRATION</h3>
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->
					<div class="reg">




                    
		<form id="registerform" method='POST' >
			<p>Please fill the form below to register your account.</p>
			<hr>
		
            <label for="usr"><b>Name</b></label>
			<input type="username"  name="name" required>

            <label for="usr"><b>Surname</b></label>
			<input type="username"  name="surn" required>

            <label for="usr"><b>Username</b></label>
			<input type="username"  name="usr" required>

			<label for="email"><b>Email</b></label>
			<input type="text"  name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password"  name="psw" required>

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password"  name="psw-repeat" required>
            <label for="psw-repeat"><b>Gender</b></label>
            <select name="gender" required>
                <option value='male'>Male</option>
                <option value='female'>Female</option>
  
            </select>
            <label for="psw-repeat"><b>Country:</b></label>
            <select name="country" required>Country:
                    
                        <?php 
                        //generates dropdown option box
                            $SQL = "SELECT countryID AS id, printable_name AS name FROM country";

                            $result = mysqli_query($DatabaseConnection,$SQL);
                          
                            while ($row = mysqli_fetch_assoc($result)){
                                $name = $row['name'];
                                $id = $row['id'];
                                echo "<option value = '$id' name ='$name'";
                               
                                   
                                echo ">$name</option>";
                                }
                            
                          ?>
                          </select>
			<hr>

		
                    <table id='search-table'>
                        <tr>
                            <th> <input class='checkbox' type="checkbox" name="PHP" value="php"> PHP</th>
                            <th> <input class='checkbox'type="checkbox" name="JAVA" value="java"> JAVA</th>
                            <th> <input class='checkbox'type="checkbox" name="HTML" value="html"> HTML</th>
                            <th> <input class='checkbox'type="checkbox" name="JAVASCRIPT" value="js"> JAVASCRIPT</th>
                            <th> <input class='checkbox'type="checkbox" name="PYTHON" value="python"> PYTHON</th>
                            
                        </tr>
                        <tr>
                            <th> <input class='checkbox'type="checkbox" name="C++" value="`c++`"> C++</th>
                            <th> <input class='checkbox'type="checkbox" name="C" value="c"> C</th>
                            <th> <input class='checkbox'type="checkbox" name="Unity" value="unity"> Unity</th>
                            <th> <input class='checkbox'type="checkbox" name=".NET" value="`.net`"> .NET</th>
                            <th> <input class='checkbox'type="checkbox" name="JSP" value="java spring"> JSP</th>
                            
                        <tr>
                            <th> <input class='checkbox'type="checkbox" name="NODEJS" value="`node js`"> NODE JS</th>
                            <th> <input class='checkbox'type="checkbox" name="LARAVEL" value="laravel"> LARAVEL</th>
                            <th> <input class='checkbox'type="checkbox" name="PERL" value="perl"> PERL</th>
                            <th> <input class='checkbox'type="checkbox" name="COBOL" value="cobol"> COBOL</th>
                            <th> <input class='checkbox'type="checkbox" name="PASCAL" value="pascal"> PASCAL</th>

                        </tr>
                        <tr>
                            <th> <input class='checkbox' type="checkbox" name="MATHLAB" value="mathlab"> MATHLAB</th>
                            <th> <input class='checkbox'type="checkbox" name="CSS" value="css"> CSS</th>
                            <th> <input class='checkbox'type="checkbox" name="KOTLIN" value="kotlin"> KOTLIN</th>
                            <th> <input class='checkbox'type="checkbox" name="MVC" value="mvc"> MVC</th>
                            <th> <input class='checkbox'type="checkbox" name="C#" value="`c#`"> C#</th>
                            <th> <input class='checkbox'type="checkbox" name="SWIFT" value="swift"> SWIFT</th>
                            

                        </tr>
                    </table>
					</div>
					<button type="submit" class="registerbtn" name='submit'>Register</button>
                </form>

		<div class="container signin">
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</div>
        <?php
                       if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $surname = $_POST['surn'];
                            $username = $_POST['usr'];
                            $email = $_POST['email'];
                            $password = $_POST['psw'];
                            $country = $_POST['country'];
                            $gender= $_POST['gender'];
                            $skills = array();
                            $trueSKillsString ="";
                            $skillsStringSQL ="";
                            if(isset($_POST['PHP'])){
                                $PHP = $_POST['PHP'];
                                array_push($skills, $PHP);
                                $trueSKillsString .= "'true'".',';                               
                                $skillsStringSQL .= $PHP . ",";
    
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['JAVA'])){
                                $JAVA = $_POST['JAVA'];
                                array_push($skills, $JAVA);
                                $skillsStringSQL .= $JAVA . ",";
                                $trueSKillsString .= "'true'".',';           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['HTML'])){
                                $HTML = $_POST['HTML'];
                                array_push($skills, $HTML);
                                $skillsStringSQL .= $HTML . ",";
                                $trueSKillsString .= "'true'".',';           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['JAVASCRIPT'])){   
                                $JAVASCRIPT = $_POST['JAVASCRIPT'];
                                array_push($skills, $JAVASCRIPT); 
                                $skillsStringSQL .= $JAVASCRIPT . ","; 
                                $trueSKillsString .= "'true'".',';                                    
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['PYTHON'])){         
                                $PYTHON = $_POST['PYTHON'];
                                array_push($skills, $PYTHON);  
                                $skillsStringSQL .= $PYTHON . ",";   
                                $trueSKillsString .= "'true'".',';                           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['C++'])){
                                $CPP = $_POST['C++'];
                                array_push($skills, $CPP);    
                                $skillsStringSQL .= $CPP . ",";
                                $trueSKillsString .= "'true'".',';            
                               
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['CSS'])){
                                $CSS = $_POST['CSS'];
                                array_push($skills, $CSS);    
                                $skillsStringSQL .= $CSS . ",";
                                $trueSKillsString .="'true'".',';         
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['C'])){
                                $C = $_POST['C'];
                                array_push($skills, $C);    
                                $skillsStringSQL .= $C . ",";
                                $trueSKillsString .= "'true'".',';           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['Unity'])){
                                $Unity = $_POST['Unity'];
                                array_push($skills, $Unity);    
                                $skillsStringSQL .= $Unity . ",";
                                $trueSKillsString .= "'true'".',';            
                                
                            }/* else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['.NET'])){
                                $DOTNET = $_POST['.NET'];
                                array_push($skills, $DOTNET);   
                                $skillsStringSQL .= $DOTNET . ",";
                                $trueSKillsString .= "'true'".',';            
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['JSP'])){
                                $JSP = $_POST['JSP'];
                                array_push($skills, $JSP);   
                                $skillsStringSQL .= $JSP . ",";
                                $trueSKillsString .= "'true'".',';           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['NODEJS'])){
                                $NODEJS = $_POST['NODEJS'];
                                array_push($skills, $NODEJS);  
                                $skillsStringSQL .= $NODEJS . ","; 
                                $trueSKillsString .="'true'".',';         
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['LARAVEL'])){
                                $LARAVEL = $_POST['LARAVEL'];
                                array_push($skills, $LARAVEL); 
                                $skillsStringSQL .= $LARAVEL . ",";  
                                $trueSKillsString .= "'true'".',';            
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['PERL'])){
                                $PERL = $_POST['PERL'];
                                array_push($skills, $PERL);   
                                $skillsStringSQL .= $PERL . ",";
                                $trueSKillsString .="'true'".',';           
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['COBOL'])){
                                $COBOL = $_POST['COBOL'];
                                array_push($skills, $COBOL);   
                                $skillsStringSQL .= $COBOL . ",";
                                $trueSKillsString .= "'true'".',';             
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['PASCAL'])){
                                $PASCAL = $_POST['PASCAL'];
                                array_push($skills, $PASCAL);  
                                $skillsStringSQL .= $PASCAL . ","; 
                                $trueSKillsString .= "'true'".',';            
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                           if(isset($_POST['CPP'])){
                                $CPP = $_POST['CPP'];
                                array_push($skills, $CPP);   
                                $skillsStringSQL .= $CPP . ",";
                                $trueSKillsString .="'true'".',';         
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['MATHLAB'])){
                                $MATHLAB = $_POST['MATHLAB'];
                                array_push($skills, $MATHLAB); 
                                $skillsStringSQL .= $MATHLAB . ",";  
                                $trueSKillsString .= "'true'".',';            
                            }/*else{
                                $trueSKillsString .="'false'".',';    
                            }*/
                            if(isset($_POST['KOTLIN'])){
                                $KOTLIN = $_POST['KOTLIN'];
                                array_push($skills, $KOTLIN);   
                                $skillsStringSQL .= $KOTLIN . ",";
                                $trueSKillsString .= "'true'".',';           
                            } /*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['MVC'])){
                                $MVC = $_POST['MVC'];
                                array_push($skills, $MVC);   
                                $skillsStringSQL .= $MVC . ",";
                                $trueSKillsString .= "'true'".',';          
                            } /*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                           if(isset($_POST['C#'])){
                                $CS = $_POST['C#'];
                                array_push($skills, $CS);   
                                $skillsStringSQL .= $CS . ",";
                                $trueSKillsString .= "'true'".',';          
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['RUBY'])){
                                $RUBY = $_POST['RUBY'];
                                array_push($skills, $RUBY);   
                                $skillsStringSQL .= $RUBY . ",";
                                $trueSKillsString .= "'true'".',';         
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            if(isset($_POST['SWIFT'])){
                                $SWIFT = $_POST['SWIFT'];
                                array_push($skills, $SWIFT);    
                                $skillsStringSQL .= $SWIFT . ",";
                                $trueSKillsString .= "'true'".',';          
                            }/*else{
                                $trueSKillsString .= "'false'".',';    
                            }*/
                            $skillsStringSQL = substr($skillsStringSQL, 0 , -1);
                            $trueSKillsString  = substr($trueSKillsString, 0 , -1);  
                            $SQL = "SELECT MAX(id) FROM user";
                            global  $DatabaseConnection;
                            $result = mysqli_query($DatabaseConnection, $SQL);
                            $getMaxId_SQL = "SELECT COUNT(id) as max FROM user";                            
                            $result = mysqli_query($DatabaseConnection,$getMaxId_SQL);
                            while($row = mysqli_fetch_assoc($result)){
                                $maxId = $row['max'];
                                
                            }
                            $currentId = $maxId +1;
                            //str_replace("`","",$skillsStringSQL);
                            //$skillsStringSQL = str_replace('`', '', $skillsStringSQL);
                         
                         //echo $trueSKillsString;
                        $skills = implode(",",$skills);
                        $trueSKillsString = str_replace('`', '', $trueSKillsString);
                           $SQLSkills = "INSERT INTO skills (skills_id,$skills) VALUES($currentId,".$trueSKillsString.")";
                           //$skillsStringSQL = str_replace('`', '', $skillsStringSQL);
                                $u = new User($currentId);
                               // echo $SQLSkills;
                                $dateOfJoin = date('Y-m-d');;
                               
                                $u->registerUser($currentId,$name,$surname,$username,$password,$email,$SQLSkills,$gender, $country,$dateOfJoin);
                                
                            
                                
                 
                             
                       
                       }
                    
                  
                       
                       

                    
                    ?>
                                
            </div>
                        

            <?php include 'assets/footer.php';?>
</body>
</html>