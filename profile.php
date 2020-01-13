<!DOCTYPE html>
<html lang="en">

    <?php 
	include 'assets/assets.php';
	include 'src/scripts/php/DBConnection.php'; 
    include 'src/scripts/php/user.php'; 
 
    

    $canEdit = false;
   
    if(isset($_GET['id'])){
        $uid = $_GET['id'];

    }else if(isset($_SESSION['id'])){
        $SesUid = $_SESSION['id'];
        //$uid = $SesUid;
       
        
        
        if(isset($_GET['id']) && isset($_SESSION['id'])){
            if($uid == $SesUid){
                $canEdit = true;
            }
        }
    }else{
        header("Location:  index.php");
    }
    
    $SQL =  "UPDATE user
    SET times_searched = times_searched + 1
    WHERE id = '$uid'";
    $result = mysqli_query($DatabaseConnection,$SQL);
    //If canEdit is set to true, that means that this is the current users profile and he
    // can edit his own profile page 
   
    $u = new User($uid);
	
	
	
	
	?>

</head>
<body class="barber_version">

    <!-- LOADER -->
	<?php include 'assets/header.php';?>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id='picture-frame'>
                <?php 
                        $u->getProfilePicture($uid);
                        if($u->picture != null){
                            echo '<img src="data:image/png;base64,'.base64_encode( $u->picture ).'"  width="249" height="249"/>';
                        }else{
                           echo '<img src="src/img/DefaultProfile.png" width="249" height="249">';
                        }
                        echo "<b>";
                        $u->getUserInfo($uid);
                        $u->getUserName($uid);
                        echo " ";
                        $u->getUserSurname($uid);
                        echo "</b>";
                        

                   ?>
               
                
        </div>
		<div id="middle"><div id="right-bar">Description/posts <?php
                  echo "<b>";
                  $u->getCountry($uid);
                  echo "</b>";
                  
                  


              ?></div>
            <div id="left-bar">
                <?php
                  
                    $u->printSkills($uid);
					


                ?>
            </div>
           
        </div>
					
					

            <?php include 'assets/footer.php';?>
</body>
</html>