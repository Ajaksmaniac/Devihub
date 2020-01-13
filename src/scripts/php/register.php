<?php

include 'src/scripts/php/checkLoged.php'; 
    session_start();
    
   

    //include 'src/scripts/php/isLogged.php'; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">    <title>DeviHub</title>    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
	<link rel="shortcut icon" type="image/png" href="http://example.com/favicon.png"/>
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="src/css/layouts/blog.css">
        <!--<![endif]-->
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
            <img src="src/img/logo/logo.png" style="height:100%px; width:100%;">
        <div class="header">
            
                <div class="sidenav">
                        <a href="index.php">Home</a>
                        <a href="./search.php">Search for Developers</a>
                        
                        <a href="#contact">Contact</a>
                        <?php if(checkLoged()){
                            $id = $_SESSION['id'];
                            echo '<a href="profile.php?id='.$id.'">'.$_SESSION['username'].'</a>' ;
                            echo '<a href="src/scripts/php/logout.php">Logout</a>' ;
                        }else{
                          echo'  <a href="loginForm.php">Login</a>';
                        }
                        if(isset($_SESSION['admin'])){
                           
                            if($_SESSION['admin'] == true){
                                echo'  <a href="admin/admin.php">cPanel</a>';
                            }
                        }
                        ?>
                        <a href="./register.php">Sign up</a>
                    
                      </div> 
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                <!-- A single blog post -->
              <?php  include 'src/scripts/php/DBConnection.php'; 
              
                
            $SQL = 
            "SELECT 
                *
            FROM
                skills
            WHERE
                skills_id = 1;";
                $counter = 0;
            $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
            $list = array();
            $list2 = array();
            while ($row = mysqli_fetch_assoc($DatabaseResult)){       
                
        
                
              $php = $row['php'];
               
                
        
                
            }
           
         
           //echo $php;


                //echo getSkills(1);
        ?>
            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>