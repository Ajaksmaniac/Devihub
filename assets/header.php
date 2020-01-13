<?php

include 'src/scripts/php/checkLoged.php'; 

    session_start();
    
   

    //include 'src/scripts/php/isLogged.php'; 
?>
	<div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="index.html"><img src="images/logos/logo.png" alt="#"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="search-copy.php">Search for developers</a></li>
					
					<?php if(checkLoged()){
                            $id = $_SESSION['id'];
                            echo '<li><a href="profile.php?id='.$id.'">'.$_SESSION['username'].'</a></li>' ;
                            echo '<li><a href="src/scripts/php/logout.php">Logout</a><li>' ;
                            echo '<li><a href="settings.php">Settings</a></li>' ;
                        }else{
                          echo'  <li><a href="login.php">Login</a></li>';
                          echo '<li><a href="register.php">Sign up</a></li>';
                        }
                        if(isset($_SESSION['admin'])){
                           
                            if($_SESSION['admin'] == true){
                                echo'  <li><a href="admin/admin.php">cPanel</a></li>';
                            }
                        }
                        ?>
					
				</ul>
			</div>
        </div>