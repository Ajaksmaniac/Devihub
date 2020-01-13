<?php 
    session_start();
    include './technology_overal_used.php'
    
?>  
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
   <script src="./js/Chart.bundle.js"></script>
    <script src="./js/utils.js"></script>
    <script type="text/javascript" src="skilldata.json"></script>
    <script type="text/javascript" src="male_female_comparision.json"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
   
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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="admin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a class="active-menu"   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
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
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
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
                     <h2>TOP 5 used technoologies + other</h2>   
                        <h5>Welcome <?php echo $_SESSION['name']; echo " " . $_SESSION['surname'] ?>  , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
             
                <div class="row"> 
                    
                      
                  
                        <div id="canvas-holder" style="width:100%">
		                    <canvas id="pie-chart-area"></canvas>
                        </div>
                        

                   
                    
                    
                   
   
  
   
	


                    </div>            
                </div>
               
                
           </div>
                 <!-- /. ROW  -->
                
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
    <!-- Pie chart for overal skills used -->
    <script src="js/overall_skills_used_pie.js"></script>
    
    
   
</body>
</html>
