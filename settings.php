<!DOCTYPE html>
<html lang="en">

 
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body class="barber_version">

    <!-- LOADER -->
    <?php 
     
     // include 'src/scripts/php/checkLoged.php'; 
         
         include 'src/scripts/php/DBConnection.php';
         include 'src/scripts/php/user.php'; 
         include 'assets/assets.php';
       
        include 'assets/header.php';
        if(!checkLoged()){
            header("Location: index.php");
        }
    //if non logged user tries to acces settings.php?>

        <!-- Page Content -->
        

            <div id="barbers" class="section lb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                        <h3><?php $name = $_SESSION['username']; echo $name . "'s Settings"  ?></h3>
                        
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->
					<div class="reg">
		
            
            <form id="buy-form"  class='buy' method="post" >
                   <!-- action='src/scripts/php/login.php'-->
                     
					<br>
                    <h2>Change Username</h2>
                    <?php
                        if(isset($_POST['change-username-submit'])){
                            if(isset($_POST['change-username-submit'])){
                                $id  = $_SESSION['id'];
                                $changeTo = $_POST['change-username'];
                                $u = new User($id);
                                $u->changeUsername($changeTo);
                                

                            }
                        }
                    
                    ?>
                   <div class='input'><b>Username: </b><input type="text" placeholder="Username" name='change-username' autofill="on"></div><br>
                  
                   <div class='input'><input type="submit" name='change-username-submit' value="Change"></div>
                  
                   </form>

                   <form id="buy-form"  class='buy' method="post" >
                   <!-- action='src/scripts/php/login.php'-->
                     
					<br>
                    <h2>Change password</h2>
                    <?php
                        if(isset($_POST['change-password-submit'])){
                            if(isset($_POST['change-password'])){
                                $id  = $_SESSION['id'];
                                $changeTo = $_POST['change-password'];
                                $u = new User($id);
                                $u->changePassword($changeTo);
                                
                                
                            }
                        }
                    
                    ?>
                   <div class='input'><b>Password: </b><input type="password" placeholder="Username" name='change-password' autofill="on"></div><br>
                  
                   <div class='input'><input type="submit" name='change-password-submit' value="Change"></div>
                  
                   </form>

                   <form id="buy-form"  class='buy' method="post" >
                   <!-- action='src/scripts/php/login.php'-->
                     
					<br>
                    <h2>Change E-mail</h2>
                    <?php
                        if(isset($_POST['change-email-submit'])){
                            if(isset($_POST['change-email'])){
                                $id  = $_SESSION['id'];
                                $changeTo = $_POST['change-email'];
                                $u = new User($id);
                                $u->changeEmail($changeTo);
                                
                                
                            }
                        }
                    
                    ?>
                   <div class='input'><b>E-Mail: </b><input type="text" placeholder="Username" name='change-email' autofill="on"></div><br>
                  
                   <div class='input'><input type="submit" name='change-email-submit' value="Change"></div>
                  
                   </form>

                   <form id="buy-form"  class='buy' method="post" >
                   <!-- action='src/scripts/php/login.php'-->
                     
					<br>
                    <h2>Change Name and Surname</h2>
                    <?php
                        if(isset($_POST['change-nameAndSurname-submit'])){
                            if(isset($_POST['change-name'])){
                                $id  = $_SESSION['id'];
                                $changeTo = $_POST['change-name'];
                                $u = new User($id);
                                $u->changeName($changeTo);
                                
                                
                            }
                            if(isset($_POST['change-surname'])){
                                $id  = $_SESSION['id'];
                                $changeTo = $_POST['change-surname'];
                                $u = new User($id);
                                $u->changeSurname($changeTo);
                                
                                
                            }
                        }
                    
                    ?>
                   <div class='input'><b>Name: </b><input type="text" placeholder="Username" name='change-name' autofill="on"></div><br>
                   <div class='input'><b>Surname: </b><input type="text" placeholder="Username" name='change-surname' autofill="on"></div><br>
                   <div class='input'><input type="submit" name='change-nameAndSurname-submit' value="Change"></div>
                  
                   </form>
                                
            </div>
                        

            <?php include 'assets/footer.php';?>
</body>
</html>