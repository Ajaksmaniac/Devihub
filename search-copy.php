<!DOCTYPE html>
<html lang="en">
 <?php include 'assets/assets.php';
 include 'src/scripts/php/DBConnection.php'; 
 
 include 'src/scripts/php/user.php'; 
     
     ?>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                        <h3>SEARCH</h3>
                        
                        <hr class="grd1">
                        Search by technology or by name or by country or by year
                        </div>
                    </div><!-- end title -->
					<div class="reg">
                    <form id="searchForm" method='GET'>

		
                    <table id='search-table'>
                        <tr>                                                                          
                            <th> <input class='checkbox'type="checkbox" name="PHP" value="php" <?php echo (isset($_GET['PHP']))? "checked='checked'": ""; //keeps checkboxes checked after refsresh ?>> PHP</th>
                            <th> <input class='checkbox'type="checkbox" name="JAVA" value="java" <?php echo (isset($_GET['JAVA']))? "checked='checked'": "";?>> JAVA</th>
                            <th> <input class='checkbox'type="checkbox" name="HTML" value="html"<?php echo (isset($_GET['HTML']))? "checked='checked'": "";?>> HTML</th>
                            <th> <input class='checkbox'type="checkbox" name="JAVASCRIPT" value="js"<?php echo (isset($_GET['JAVASCRIPT']))? "checked='checked'": "";?>> JAVASCRIPT</th>
                            <th> <input class='checkbox'type="checkbox" name="PYTHON" value="python"<?php echo (isset($_GET['PYTHON']))? "checked='checked'": "";?>> PYTHON</th>
                            
                        </tr>
                        <tr>
                            <th> <input class='checkbox'type="checkbox" name="C++" value="`c++`"<?php echo (isset($_GET['C++']))? "checked='checked'": "";?>> C++</th>
                            <th> <input class='checkbox'type="checkbox" name="C" value="c"<?php echo (isset($_GET['C']))? "checked='checked'": "";?>> C</th>
                            <th> <input class='checkbox'type="checkbox" name="Unity" value="unity"<?php echo (isset($_GET['Unity']))? "checked='checked'": "";?>> Unity</th>
                            <th> <input class='checkbox'type="checkbox" name="DOTNET" value="`.net`"<?php echo (isset($_GET['DOTNET']))? "checked='checked'": "";?>> .NET</th>
                            <th> <input class='checkbox'type="checkbox" name="JSP" value="`java spring`"<?php echo (isset($_GET['JSP']))? "checked='checked'": "";?>> JSP</th>
                            
                        <tr>
                            <th> <input class='checkbox'type="checkbox" name="NODEJS" value="`node js`"<?php echo (isset($_GET['NODEJS']))? "checked='checked'": "";?>> NODE JS</th>
                            <th> <input class='checkbox'type="checkbox" name="LARAVEL" value="laravel"<?php echo (isset($_GET['LARAVEL']))? "checked='checked'": "";?>> LARAVEL</th>
                            <th> <input class='checkbox'type="checkbox" name="PERL" value="perl"<?php echo (isset($_GET['PERL']))? "checked='checked'": "";?>> PERL</th>
                            <th> <input class='checkbox'type="checkbox" name="COBOL" value="cobol"<?php echo (isset($_GET['COBOL']))? "checked='checked'": "";?>> COBOL</th>
                            <th> <input class='checkbox'type="checkbox" name="PASCAL" value="pascal"<?php echo (isset($_GET['PASCAL']))? "checked='checked'": "";?>> PASCAL</th>

                        </tr>
                        <tr>
                            <th> <input class='checkbox' type="checkbox" name="MATHLAB" value="mathlab"<?php echo (isset($_GET['MATHLAB']))? "checked='checked'": "";?>> MATHLAB</th>
                            <th> <input class='checkbox'type="checkbox" name="CSS" value="css"<?php echo (isset($_GET['CSS']))? "checked='checked'": "";?>> CSS</th>
                            <th> <input class='checkbox'type="checkbox" name="KOTLIN" value="kotlin"<?php echo (isset($_GET['KOTLIN']))? "checked='checked'": "";?>> KOTLIN</th>
                            <th> <input class='checkbox'type="checkbox" name="MVC" value="mvc"<?php echo (isset($_GET['MVC']))? "checked='checked'": "";?>> MVC</th>
                            <th> <input class='checkbox'type="checkbox" name="C#" value="`c#`"<?php echo (isset($_GET['C#']))? "checked='checked'": "";?>> C#</th>
                            
                            

                        </tr>
                        
                        <tr>
                        <th><input class='checkbox'type="checkbox" name="SWIFT" value="swift"<?php echo (isset($_GET['SWIFT']))? "checked='checked'": "";?>> SWIFT</th>
                        <th><input class='checkbox'type="checkbox" name="RUBY" value="ruby"<?php echo (isset($_GET['RUBY']))? "checked='checked'": "";?>> RUBY</th>
                        </tr>
                    </table>
                    <input type="text" name='search'>
                    <div id="cntryear">
					<label> Country:<label>
                    <select name="country">
                    <option value = 'null' name ='null'>Default</option>
                        <?php 
                        //generates dropdown option box for each country
                            $SQL = "SELECT countryID AS id, printable_name AS name FROM country";

                            $result = mysqli_query($DatabaseConnection,$SQL);
                          
                            while ($row = mysqli_fetch_assoc($result)){
                                $name = $row['name'];
                                $id = $row['id'];
                                $checked = ($_GET['country'] == $id)? "selected": "";
                                echo "<option value = '$id' name ='$name' $checked"  ;
                               
                                   
                                echo ">$name</option>";
                                }
                            echo "</select>";
                               ?>
                            
                            <label> Join year:<label>
                    <select name="year">
                  
                       <option value="null" >Default</option>
                       <!-- <option value="2019"<?php  /* if(isset($_GET['year']) == '2019') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2019</option>
                        <option value="2018"<?php if(isset($_GET['year']) == '2018') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2018</option>
                        <option value="2017" <?php if(isset($_GET['year']) == '2017') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2017</option>
                        <option value="2016"<?php if(isset($_GET['year']) == '2016') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2016</option>
                        <option value="2015"<?php if(isset($_GET['year']) == '2015') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2015</option>
                        <option value="2014"<?php if(isset($_GET['year']) == '2014') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2014</option>
                        <option value="2013"<?php if(isset($_GET['year']) == '2013') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2013</option>
                        <option value="2012"<?php if(isset($_GET['year']) == '2012') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2012</option>
                        <option value="2011"<?php if(isset($_GET['year']) == '2011') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2011</option>
                        <option value="2010"<?php if(isset($_GET['year']) == '2010') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2010</option>
                        <option value="2009"<?php if(isset($_GET['year']) == '2009') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2009</option>
                        <option value="2008"<?php if(isset($_GET['year']) == '2008') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2008</option>
                        <option value="2007"<?php if(isset($_GET['year']) == '2007') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2007</option>
                        <option value="2006"<?php if(isset($_GET['year']) == '2006') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>2006</option>
                        <option value="2005"<?php if(isset($_GET['year']) == '2005') {echo "selected='selected'"; }else{echo "selected = ' '";} */?>>2005</option>
                      -->
                            <?php  
                                $year = 2015;


                                while($year <= 2019){
                                    if(isset($_GET['year'])){
                                        $selectedYear = $_GET['year'];
                                        $selected =  ($selectedYear == $year)? "selected":" ";
                                        
                                    }else{
                                        $selected  = " ";
                                    }

                                    

                                    echo " <option value='$year' ";
                                    echo $selected;
                                    echo ">$year</option>";
                                    
                                    $year += 1;
                                }
                            
                            
                            ?>
                    </select>
                    <label>  Age:<label>
                    <select name="age">
                        <option value="null" <?php if(isset($_GET['age']) == 'null') {echo "selected='selected'"; }else{echo "selected = ' '";} ?> >Default</option>
                       <option value="under" <?php if(isset($_GET['age']) == 'under') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>Under 18</option>
                       <option value="18" <?php if(isset($_GET['age']) == '18') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>18+</option>
                       <option value="25" <?php if(isset($_GET['age']) == '25') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>25+</option>
                       <option value="35" <?php if(isset($_GET['age']) == '35') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>35+</option>
                       <option value="45" <?php if(isset($_GET['age']) == '45') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>45+</option>
                       <option value="50" <?php if(isset($_GET['age']) == '50') {echo "selected='selected'"; }else{echo "selected = ' '";} ?>>50+</option>

                       </select>
					</div>
                <input id='search-submit'type="submit" name="submit" value="Search"><br>
					</div>
					
                </form>
                <?php
                    
                        //_get all users that mach any of the given of the given technology
                        $string = "";
                        $stringSQL = "";
                        $searchGroupSQL = "UPDATE skill_group  SET times_searched = times_searched + 1 WHERE ";
                        if(isset($_GET['submit'])){
                           
                            
                            if(isset($_GET['PHP'])){
                                
                                $php = $_GET['PHP'];
                                $searchGroupSQL .= $php. " = 'true' AND ";
                                $stringSQL .= $php. " = 'true' OR "; // <----- appends $stringSQL query
                                $string .= $php . " ";               // <----- appends $string where search results will be displayed
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$php'";
                                $result = mysqli_query($DatabaseConnection,$SQL); // <---- updates current technology as searched once more
                                  
                              

                                
                            }else{
                                $php = "php";
                                $searchGroupSQL .= $php. " = 'false' AND ";
                            }
                            if(isset($_GET['JAVA'])){
                                $java = $_GET['JAVA'];
                                $searchGroupSQL .= $java. " = 'true' AND ";
                                $stringSQL .= $java. " = 'true' OR ";
                                $string .= $java. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$java'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $java = "java";
                             
                                $searchGroupSQL .= $java. " = 'false' AND ";
                            }
                            if(isset($_GET['HTML'])){
                                $html = $_GET['HTML'];
                                $searchGroupSQL .= $html. " = 'true' AND ";
                                $stringSQL .= $html. " = 'true' OR ";
                                $string .= $html. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$html'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $html = "html";
                                $searchGroupSQL .= $html. " = 'false' AND ";
                            }
                            if(isset($_GET['JAVASCRIPT'])){
                                $js = $_GET['JAVASCRIPT'];
                                $searchGroupSQL .= $js. " = 'true' AND ";
                                $stringSQL .= $js. " = 'true' OR ";
                                $string .= $js. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$js'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $js = "js";
                                $searchGroupSQL .= $js. " = 'false' AND ";
                            }
                            if(isset($_GET['PYTHON'])){
                                $python = $_GET['PYTHON'];
                                $searchGroupSQL .= $python. " = 'true' AND ";
                                $stringSQL .= $python. " = 'true' OR ";
                                $string .= $python. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$python'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $python = "python";
                                $searchGroupSQL .= $python. " = 'false' AND ";
                            }
                            if(isset($_GET['C++'])){
                                $cpp = $_GET['C++'];
                                $searchGroupSQL .= $cpp. " = 'true' AND ";
                                $stringSQL .= $cpp. " = 'true' OR ";
                                $string .= $cpp. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$cpp'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $cpp = "`c++`";
                                $searchGroupSQL .= $cpp. " = 'false' AND ";
                            }
                            if(isset($_GET['CSS'])){
                                $css = $_GET['CSS'];
                                $searchGroupSQL .= $css. " = 'true' AND ";
                                $stringSQL .= $css. " = 'true' OR ";
                                $string .= $css. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$css'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $css = "css";
                                $searchGroupSQL .= $css. " = 'false' AND ";
                            }
                            if(isset($_GET['C'])){
                                $c = $_GET['C'];
                                $searchGroupSQL .= $c. " = 'true' AND ";
                                $stringSQL .= $c. " = 'true' OR ";
                                $string .= $c. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$c'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{  
                                $c = "c";
                                $searchGroupSQL .= $c. " = 'false' AND ";
                            }
                            if(isset($_GET['Unity'])){
                                $unity = $_GET['Unity'];
                                $searchGroupSQL .= $unity. " = 'true' AND ";
                                $stringSQL .= $unity. " = 'true' OR ";
                                $string .= $unity. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$unity'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                                
                            }else{
                                $unity = "unity";
                                $searchGroupSQL .= $unity. " = 'false' AND ";
                            }
                            if(isset($_GET['DOTNET'])){
                                $DOTNET = $_GET['DOTNET'];
                                $searchGroupSQL .= $DOTNET. " = 'true' AND ";
                                $stringSQL .= $DOTNET. " = 'true' OR ";
                                $string .=  ".net ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$DOTNET'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                                
                            }else{
                                $DOTNET = "`.net`";
                                $searchGroupSQL .= $DOTNET. " = 'false' AND ";
                            }
                            if(isset($_GET['JSP'])){
                                $java_spring = $_GET['JSP'];
                                $searchGroupSQL .= $java_spring. " = 'true' AND ";
                                $stringSQL .= $java_spring. " = 'true' OR ";
                                $string .= "jsp ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$java_spring'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $java_spring = "`java spring`";
                                $searchGroupSQL .= $java_spring. " = 'false' AND ";
                            }
                            if(isset($_GET['NODEJS'])){
                                $node_js = $_GET['NODEJS'];
                                $searchGroupSQL .= $node_js. " = 'true' AND ";
                                $stringSQL .= $node_js. " = 'true' OR ";
                                $string .= "nodejs ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$node_js'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $node_js = "`node js`";
                                $searchGroupSQL .= $node_js. " = 'false' AND ";
                            }
                            if(isset($_GET['LARAVEL'])){
                                $laravel = $_GET['LARAVEL'];
                                $searchGroupSQL .= $laravel. " = 'true' AND ";
                                $stringSQL .= $laravel. " = 'true' OR ";
                                $string .= $laravel. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$laravel'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $laravel = "laravel";
                                $searchGroupSQL .= $laravel. " = 'false' AND ";
                            }
                            if(isset($_GET['PERL'])){
                                $perl = $_GET['PERL'];
                                $searchGroupSQL .= $perl. " = 'true' AND ";
                                $stringSQL .= $perl. " = 'true' OR ";
                                $string .= $perl. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$perl'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $perl = "perl";
                                $searchGroupSQL .= $perl. " = 'false' AND ";
                            }
                            if(isset($_GET['COBOL'])){
                                $cobalt = $_GET['COBOL'];
                                $searchGroupSQL .= $cobalt. " = 'true' AND ";
                                $stringSQL .= $cobalt. " = 'true' OR ";
                                $string .= $cobalt. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$cobalt'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $cobalt = "cobol";
                                $searchGroupSQL .= $cobalt. " = 'false' AND ";
                            }
                            if(isset($_GET['PASCAL'])){
                                $pascal = $_GET['PASCAL'];
                                $searchGroupSQL .= $pascal. " = 'true' AND ";
                                $stringSQL .= $pascal. " = 'true' OR ";
                                $string .= $pascal. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$pascal'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $pascal ="pascal";
                                $searchGroupSQL .= $pascal. " = 'false' AND ";
                            }
                            /*if(isset($_GET['CPP'])){
                                $cpp = $_GET['CPP'];
                                $stringSQL .= $cpp. " = 'true' OR ";
                                $string .= $cpp. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$cpp'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }*/
                            if(isset($_GET['MATHLAB'])){
                                $mathlab = $_GET['MATHLAB'];
                                $searchGroupSQL .= $mathlab. " = 'true' AND ";
                                $stringSQL .= $mathlab. " = 'true' OR ";
                                $string .= $mathlab. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$mathlab'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $mathlab = "mathlab";
                                $searchGroupSQL .= $mathlab. " = 'false' AND ";
                            }
                            if(isset($_GET['KOTLIN'])){
                                $kotlin = $_GET['KOTLIN'];
                                $searchGroupSQL .= $kotlin. " = 'true' AND ";
                                $stringSQL .= $kotlin. " = 'true' OR ";
                                $string .= $kotlin. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$kotlin'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            } else{
                                $kotlin = "kotlin";
                                $searchGroupSQL .= $kotlin. " = 'false' AND ";
                            }
                            if(isset($_GET['MVC'])){
                                $mvc = $_GET['MVC'];
                                $searchGroupSQL .= $mvc. " = 'true' AND ";
                                $stringSQL .= $mvc. " = 'true' OR ";
                                $string .= $mvc. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$mvc'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            } else{
                                $mvc = "mvc";
                                $searchGroupSQL .= $mvc. " = 'false' AND ";
                            }
                            if(isset($_GET['C#'])){
                                $cs = $_GET['C#'];
                                $searchGroupSQL .= $cs. " = 'true' AND ";
                                $stringSQL .= $cs. " = 'true' OR ";
                                $string .= $cs. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$cs'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $cs = "`c#`";
                                $searchGroupSQL .= $cs. " = 'false' AND ";
                            }
                            if(isset($_GET['RUBY'])){
                                $ruby = $_GET['RUBY'];
                                $searchGroupSQL .= $ruby. " = 'true' AND ";
                                $stringSQL .= $ruby. " = 'true' OR ";
                                $string .= $ruby. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$ruby'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $ruby = "ruby";
                                $searchGroupSQL .= $ruby. " = 'false' AND ";
                            }
                            if(isset($_GET['SWIFT'])){
                                $swift = $_GET['SWIFT'];
                                $searchGroupSQL .= $swift. " = 'true' AND ";
                                $stringSQL .= $swift. " = 'true' OR ";
                                $string .= $swift. " ";
                                $SQL =  "UPDATE most_searched_skills
                                        SET times_searched = times_searched + 1
                                        WHERE name = '$swift'";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                            }else{
                                $swift = "swift";
                                $searchGroupSQL .= $swift. " = 'false' AND ";
                            }
                                
                            
                                
                                
                             //to-do if $stringSQL is empty(No checkboxes are selected) user will be searched by its name OR user will be searched by its country.
                             //IF is checkboxes are set(skill groups will be  seted too)
                            $searchByTechnologies = false;
                            $searchByTechnologies = (strlen($stringSQL) > 0)? true : false;
                            $searchByCountry = false;
                            $searchByName = false;
                            $searchByJoinYear = false;
                            $searchByAge = false;
                            $SQL = "SELECT id FROM user WHERE ";

                            $queryString = "";
                            if($_GET['search']){
                                $searchString = $_GET['search'];

                                $searchByName = (strlen($searchString) > 0)? true : false;
                            }
                            if($_GET['country'] != 'null'){                                
                                $countryId = $_GET['country'];
                                $searchByCountry = true;                                
                                //$stringSQL .="contryID = $id OR";
                            }
                            if($_GET['year'] != 'null'){                                
                                $year = $_GET['year'];
                                $searchByJoinYear = true;                                
                                //$stringSQL .="contryID = $id OR";
                            }
                            if($_GET['age'] != 'null'){                                
                                $age = $_GET['age'];
                                $searchByAge = true;                                
                                //$stringSQL .="contryID = $id OR";
                            }

                            

                            //if multiple search methods are enterted, search by technology has the most priority
                            if($searchByTechnologies){
                                $SQLT = "SELECT skills_id as id FROM skills WHERE ".$stringSQL;
                                $SQLT = substr($SQLT, 0 , -3);
                                $queryString .= $string. " ";
                                //echo $SQLT;
                                //search user with given technologies
                                $techIDs = array();
                                $result_user = mysqli_query($DatabaseConnection,$SQLT); 
                                while($row = mysqli_fetch_assoc($result_user)){
                                    $techIDs[] = $row['id'];
                                }
                                $query_ids = implode(',', $techIDs);
                               // $techID = $row['id'];
                                //echo $query_ids;
                                //creates user blocks 
                                
                                $SQL = $SQL . "skills_id in ($query_ids) AND ";
                                 
                                //echo $SQL;
                                $searchGroupSQL = substr($searchGroupSQL, 0 , -4);
                                $stringSQL = substr($stringSQL, 0 , -3);
                                //echo $searchGroupSQL;
                                $test = substr($searchGroupSQL,60);
                                $testt = "SELECT skills_id FROM skill_group " .$test;
                                $resultt = mysqli_query($DatabaseConnection, $testt);
                                $num_rows = mysqli_num_rows($resultt);
                                if($num_rows >0){
                                   // echo $searchGroupSQL;
                                    $resultSkillGroups = mysqli_query($DatabaseConnection, $searchGroupSQL);
                                }else{
                                    $count = substr_count($string, ',');
                                    $stringInsert = str_replace(" ", ",", $string);
                                    $skillsToAdd="";
                                    $stringInsert = substr($stringInsert, 0 , -1);
                                    for( $i= 0;$i <=$count+1;$i++){
                                       $skillsToAdd .= "true,";
                                    }
                                    $skillsToAdd = substr($skillsToAdd, 0 , -1);
                                    $_getMaxId_SQL = "SELECT COUNT(skills_id) as max FROM skill_group";                            
                                    $result = mysqli_query($DatabaseConnection,$_getMaxId_SQL);
                                       while($row = mysqli_fetch_assoc($result)){
                                           $maxId = $row['max'];
                                   
                                   }
                                $currentId = $maxId +1;
                                $SQLSkills = "INSERT INTO skill_group (skills_id,$stringInsert) VALUES($currentId,$skillsToAdd)";
                                  // echo  $SQLSkills;
                                $result = mysqli_query($DatabaseConnection,$SQLSkills);
                              
                                  
                                }
                
                            }
                             if($searchByName){//search by name or surname of the user
                                //splits string to find name and surname;
                                $str_arr = explode(" ", $searchString);
                                $leng = sizeof($str_arr);
                                $queryString .= $searchString ." ";

                                
                                //if user ented only name
                                if($leng == 1){
                                    $name = $str_arr[0];
                                    $SQL = $SQL." name LIKE '$name%' OR surname LIKE '$name%' AND ";
                                }else if ($leng == 2){//if user entered name and surname
                                    $name = $str_arr[0];
                                    $surname = $str_arr[1];
                
                                    $SQL =$SQL. " (name LIKE '$name%' OR surname LIKE '$surname%') OR (name LIKE '$surname%' OR surname LIKE '$name%') AND ";
                                }
                               

                               //search by country
                            }
                             if($searchByJoinYear){
                                $year = $_GET['year'];
                                $SQL = $SQL." YEAR(date_of_join) = '$year' AND ";
                                
                                $queryString .= $year." ";


                                
                                    
                            
                                //if no search metods are used, it displays all users

                            }
                             if($searchByCountry){//search by name or surname of the user
                                    //splits string to find name and surname;
                                    $SQL = $SQL."countryID =  $countryId AND ";
                                    $SQL_getCountry = "SELECT printable_name FROM country WHERE countryID  = $countryId";
                                    $result = mysqli_query($DatabaseConnection, $SQL_getCountry);
                                    $row = mysqli_fetch_assoc($result);
                                    $countryname =$row['printable_name'];




                                    $queryString .= $countryname." ";   
       
                            }
                            if($searchByAge){//search by name or surname of the user

                                
                                $age = $_GET['age'];
                                $SQL = $SQL."FLOOR(DATEDIFF(  CURDATE(),`date_of_birth`)/365) >  $age AND ";
                               
                                echo "AA";



                                $queryString .= $age." ";   
   
                        }/*else{
                                $SQL = "SELECT id FROM user";
                                $result = mysqli_query($DatabaseConnection,$SQL);
                                //$row = mysqli_fetch_row($result);
                                if(mysqli_num_rows($result) == 0){
                                    echo "No search results";
                                }else{
                                    echo $stringSQL. "A";
                                    while($row = mysqli_fetch_assoc($result)){
                                    $u = new User($row['id']);
                                    $u->getSkills($row['id']);
                                    $u->getUserInfo($row['id']);
                                    $u->createDiv($row['id'], $string);
                                    }
                                }
                                mysqli_close($DatabaseConnection);
                            }*/


                            /**
                             * SEARCHES WITH COMBOS (NAME, CITY, DATE, TECHNOLOGY)
                             *a Adding a single search, if not existing in a search table, adds a new row, if it
                             *does exist, adds an new date of search to a date_searched table.
                             */
                            echo"<p>Searched results for: </p>";
                            echo "<b>$queryString</b>";
                            $SQL_query_string = "SELECT search_id AS id FROM search WHERE search_query = '$queryString'";

                            $resultSearch = mysqli_query($DatabaseConnection,$SQL_query_string);
                            //if current search exists in a table
                            if(mysqli_num_rows($resultSearch) > 0 ){
                                while($row = mysqli_fetch_assoc($resultSearch)){
                                   
                                  $date_searched_id  = $row['id'];
                                }
                                $SQL_query_string = "INSERT INTO date_searched (search_id)
                                                                VALUES ($date_searched_id)";
                                //adds new search date from existing search in search table                                
                                $resultSearch = mysqli_query($DatabaseConnection,$SQL_query_string);
                                if(!$resultSearch){
                                    echo "Error while trying to add search_date";
                                    mysqli_error($DatabaseConnection);
                                }
                                $SQL_select_query = "SELECT times_searched AS num FROM search
                                 WHERE search_id = $date_searched_id";
                                // gets times_searched of a current search so it can incement it by 1
                                $resultSearch = mysqli_query($DatabaseConnection,$SQL_select_query);

                                while($row = mysqli_fetch_assoc($resultSearch)){
                                    $times_Searched = $row['num'];
                            
                                }
                                //increment times_searched by 1;
                                $times_Searched += 1;
                                $SQL_INSERT_ti_searched = "UPDATE search
                                                           SET times_searched = $times_Searched
                                                           WHERE search_id =  $date_searched_id";    
                            $resultUpdate = mysqli_query($DatabaseConnection,$SQL_INSERT_ti_searched);
                            if(!$resultUpdate){
                                echo "Failed to increment times_search in search table";
                            }
                            }else{
                                //if it doesnt exist in the table
                                $_getMaxId_SQL = "SELECT COUNT(search_id) as max FROM search";                            
                                    $result = mysqli_query($DatabaseConnection,$_getMaxId_SQL);
                                       while($row = mysqli_fetch_assoc($result)){
                                           $maxId = $row['max'];
                                   
                                   }
                                $currentId = $maxId +1;
                                $SQL_search = "INSERT INTO search (search_id, search_query,times_searched)
                                                                VALUES ($currentId,'$queryString', 1)";
                                                                
                                $result = mysqli_query($DatabaseConnection,$SQL_search);
                                if(!$result){
                                    echo "Error while trying to add to search table";
                                }
                            }
                            $SQL = substr($SQL, 0 , -4);
                           // echo $SQL;
                            $result = mysqli_query($DatabaseConnection,$SQL);
                            if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                   
                                    $u = new User($row['id']);
                                    $u->getSkills($row['id']);
                                    $u->getUserInfo($row['id']);
                                    $s = ($searchByTechnologies) ? $string: "";
                                    $u->createDiv($row['id'],$s);
                                }
                                mysqli_close($DatabaseConnection);
                           }else{
                            //creates user blocks 
                               
                                echo "No search results";
                                
                           }
                          // print_r($_GET) ;

                        }  
                  
                    
                
         
            
            
            
              
            
        
            
                    
                    ?>
                
		
</form>
                                
            </div>
                        

            <?php include 'assets/footer.php';?>
</body>
</html>