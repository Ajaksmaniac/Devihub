<!DOCTYPE html>
<html lang="en">
 <?php
	
    
	include 'assets/assets.php';
	?>
    <script>
window.onload = function() {
  var recaptcha = document.forms["buy-form"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    // do something
    alert("Please complete the captcha");
  }
}
</script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
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
                        <h3>LOGIN</h3>
                        <hr class="grd1">
                        </div>
                    </div><!-- end title -->
					<div class="reg">
		<?php  
           include 'src/scripts/php/DBConnection.php';
            if(isset($_POST['user'],$_POST['pass'])){
                $inUsername = $_POST['user'];
                $inPassword = $_POST['pass'];
                $SQL = "SELECT 
                id,
                username,
                password
                FROM
                user
                WHERE
                username like '$inUsername';";
                
                $DatabaseResult = mysqli_query($DatabaseConnection,$SQL);
                $DatabaseResultCheck = mysqli_num_rows($DatabaseResult);
                if($DatabaseResultCheck > 0){
                    while ($DatabaseRow = mysqli_fetch_assoc($DatabaseResult)){   
                        if($inUsername == $DatabaseRow['username'] && $inPassword ==  $DatabaseRow['password']) {
                            session_start();
                            $uid = $DatabaseRow['id'];
                            $_SESSION['id'] = $uid;
                            echo $_SESSION['id'];

                            /**
                             * sets in database that given user is currently active
                             * not wowkring properly.
                             */
                            
                            

                           /* $SQL_Login_true = "
                            UPDATE user
                            SET logged = 'true'
                            WHERE id = '$uid'";*/
                           // mysqli_query($DatabaseConnection, $SQL_Login_true); 
                            header("Location: src/scripts/php/connection.php");
                        }else if($inUsername == $DatabaseRow['username']){   
                           if($inPassword !=  $DatabaseRow['password']){
                               echo "Bad password";
                           }
                        }                
                    }
                }else{
                    //header("Location: ./../../../loginForm.php" );
                    echo "User not found";
                }
            }else{
                echo 'Please fill in both of the fields below.';
			
            }
           
        ?>
            <form id="buy-form"  class='buy' method="post" >
                   <!-- action='src/scripts/php/login.php'-->
                     
					<br>
                   <div class='input'><b>Username: </b><input type="text" placeholder="Username" name='user' autofill="on" required></div><br>
                   <div class='input'><b>Password</b><input type="password" placeholder="Password" name='pass' autofill="on" required></div><br>
                   <div class="g-recaptcha" data-sitekey="6LeZ8MYUAAAAAB6yqGoOY0U_SAC04_DDiATOAJes" required></div>
                   <div class='input'><input type="submit"  value="Login"></div>
                  
                   </form>
                                
            </div>
                        

            <?php include 'assets/footer.php';?>
</body>
</html>