<?php 
 session_start();
/*
    Protection so non admin users cant acces cPanel
*/ 
if(isset($_SESSION['admin'])){
                           
    if($_SESSION['admin'] == false){ //if normal loged user tries to acces cPanel, he gets redirected to home page
        header("Location: ../index.php");
    }
}else{
    header("Location: ../index.php"); // if anonymous users tries to accces cPanel, he gets redirected to home page
}
include '../src/scripts/php/DBConnection.php'; 
   
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeviHub Admin Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">cPanel</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="../src/scripts/php/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="admin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                      <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>	
                    <li  >
                        <a  href="../index.php"><i class="fa fa-edit fa-3x"></i> Exit cPanel </a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <?php echo $_SESSION['name']; echo " " . $_SESSION['surname'] ?> , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
			<div class="panel panel-back noti-box">
               
               
             </div>
		     </div>
                    
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        
                       
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
          <div class="main-temp-back">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="text-temp"></i></div>
                <div class="col-xs-6">
                  <div class="text-temp"> <?php
                    $SQL = "SELECT COUNT(visit_id) AS Visits FROM visit";
                    $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                    while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                        $visits = $row['Visits'];
                      
                    }
                    echo "Visits ".  $visits;
                  ?> </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
                    
			
    </div>
                        
        </div>
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                <div class="row" >
                    <div class="col-md-3 col-sm-12 col-xs-12">
  <div class="panel panel-primary text-center no-boder bg-color-green">
                        
                       
                    </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Top 5 most searched users
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Times searched</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $SQL = "SELECT * FROM user ORDER BY times_searched DESC LIMIT 5"; // Selects first 5 most serched users
                                      
                                        $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                                        while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                                            $id = $row['id'];
                                            $name = $row['name'];
                                            $surname = $row['surname'];
                                            $username = $row['username'];
                                            $email = $row['email'];
                                            $timesSearched = $row['times_searched'];

                                            echo "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$surname</td>
                                            <td>$username</td>
                                            <td>$email</td>
                                            <td>$timesSearched</td>
                                        </tr>";
                                          
                                    
                                    
                                    
                                    
                                            
                                        }
                                    
                                    ?>
                                        
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Top 5 most searched technologies
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                
                                    <thead>
                                        <tr>
                                            <th>Skill ID</th>
                                            
                                            <th>Skill</th>
                                            <th>Times searched</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $SQL = "SELECT * FROM most_searched_skills ORDER BY times_searched DESC LIMIT 5"; // Selects first 5 most serched users
                                      
                                        $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                                        while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                                            $id = $row['skill_id'];
                                            $name = $row['name'];
                                            
                                            $timesSearched = $row['times_searched'];

                                            echo "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            
                                            <td>$timesSearched</td>
                                        </tr>";
                                          
                                    
                                    
                                    
                                    
                                            
                                        }
                                    
                                    ?>
                                        
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Top 5 most searched grouped technologies
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                
                                    <thead>
                                        <tr>
                                            <th>Skill ID</th>
                                            <th>Times searched</th>
                                            <th>php</th>
                                            <th>java</th>
                                            <th>html</th>
                                            <th>css</th>
                                            <th>js</th>
                                            <th>python</th>
                                            <th>c++</th>
                                            <th>c#</th>
                                            <th>c</th>
                                            <th>ruby</th>
                                            <th>unity</th>
                                            <th>.net</th>
                                            <th>java spring</th>
                                            <th>node js</th>
                                            <th>laravel</th>  
                                            <th>mvc</th>    
                                            <th>perl</th> 
                                            <th>cobol</th>   
                                            <th>pascal</th>  
                                            <th>mathlab</th>
                                            <th>swift</th>
                                            <th>kotlin</th>
                                
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $SQL = "SELECT * FROM skill_group ORDER BY times_searched DESC LIMIT 5"; // Selects first 5 most serched users
                                      
                                        $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                                        while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                                            $id = $row['skills_id'];
                                            $php = $row['php'];
                                            $java = $row['java'];
                                            $html = $row['html'];
                                            $css = $row['css'];
                                            $js = $row['js'];
                                            $python = $row['python'];
                                            $cpp = $row['c++'];
                                            $cs = $row['c#'];
                                            $c = $row['c'];
                                            $ruby = $row['ruby'];
                                            $unity = $row['unity'];
                                            $DOTNET = $row['.net'];
                                            $java_spring = $row['java spring'];
                                            $node_js = $row['node js'];
                                            $laravel = $row['laravel'];
                                            $mvc = $row['mvc'];
                                            $perl = $row['perl'];
                                            $cobol = $row['cobol'];
                                            $pascal = $row['pascal'];
                                            $mathlab = $row['mathlab'];
                                            $swift = $row['swift'];
                                            $kotlin = $row['kotlin'];

                                            
                                            
                                            $timesSearched = $row['times_searched'];
                                            
                                            echo "<tr>
                                            
                                            <td>$id</td>
                                            <td>$timesSearched</td>
                                            <th>$php</th>
                                            <th>$java</th>
                                            <th>$html</th>
                                            <th>$css</th>
                                            <th>$js</th>
                                            <th>$python</th>
                                            <th>$cpp</th>
                                            <th>$cs</th>
                                            <th>$c</th>
                                            <th>$ruby</th>
                                            <th>$unity</th>
                                            <th>$DOTNET</th>
                                            <th>$java_spring</th>
                                            <th>$node_js</th>
                                            <th>$laravel</th>  
                                            <th>$mvc</th>    
                                            <th>$perl</th> 
                                            <th>$cobol</th>   
                                            <th>$pascal</th>  
                                            <th>$mathlab</th>
                                            <th>$swift</th>
                                            <th>$kotlin</th>
                                            
                                           
                                        </tr>";
                                          
                                    
                                    
                                    
                                    
                                            
                                        }
                                    
                                    ?>
                                        
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Top 5 grouped searches
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">

                                
                                    <thead>
                                        <tr>
                                            <th>search_id</th>
                                            <th>Search query</th>
                                            <th>Times searched</th>
                                            
                                
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $SQL = "SELECT search_id AS ID, search_query as search, times_searched AS timess FROM search ORDER BY times_searched DESC LIMIT 5"; // Selects first 5 most serched users
                                      
                                        $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                                        while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                                            $id = $row['ID'];
                                            $search = $row['search'];
                                            $times = $row['timess'];
                                            
                                            

                                            
                                            
                                      
                                            
                                            echo "<tr>
                                            
                                            <td>$id</td>
                                            <td>$search</td>
                                            <th>$times</th>
                                          
                                            
                                           
                                        </tr>";
                                          
                                    
                                    
                                    
                                    
                                            
                                        }
                                    
                                    ?>
                                        
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                   
                    
                </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="panel panel-default">
                        <div class="panel-heading">
                           Label Examples
                        </div>
                        <div class="panel-body">
                            <span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>
                        </div>
                    </div>
                         
                         <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                      
                    </div>
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
