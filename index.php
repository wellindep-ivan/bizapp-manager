<?php

    session_start();

    /* require_once('./dbconn.class.php');

    include_once("functions.php");

    $db = new DBConn(); */


    /********* PROVEN LOGIN CODE *********/

    require_once('connect.php');

    if(isset($_POST) & !empty($_POST)){
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM bm_login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['username'] = $username;
        }else{
            $errorMessage = "Invalid Username/Password";
        }
    }

    if(isset($_SESSION['username'])){
        header('Location: https://www.redmatmediabizapp.com/admin/admin/dashboard.php');
    }

    //--------------------------------------------------

    require('./includes/header.php');

    extract($_REQUEST);

?>

<body>
    <div class="container-fluid" id="login-page">
        
        <!-- ***************** LOGO AREA ***************** -->
        <div class="row"><div class="col-lg-4 bm-center"><img class="bm-logo" src="img/rmm-logo_dark.png"></div></div>
        
        <!-- ***************** EXPERIMENTAL LOGIN CODE ***************** -->
        <?php /*
			if (isset($submit)) {
			
				$sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
				$results = $db->query($sql);

				if (count($results) > 0) {

					$_SESSION['authorized'] = '1';
					$_SESSION['username'] = $username;
					$_SESSION['userID'] = $results[0]->userID;
				
					if(strtolower($username)=='admin') {
						$_SESSION['isAdmin'] = '1';
					}
					else {
						$_SESSION['isAdmin'] = '0';
					}

					header('Location: https://www.redmatmediabizapp.com/admin/admin/dashboard.php');
				}                  
			 	else {
					$errorMessage = 'Invalid username or password';
				}
			}
		*/ ?>
        
        <!-- ***************** LOGIN FORM ***************** -->
        <div class="row">
            <form action method="POST" class="bm-login col-lg-4 col-sm-6 bm-center">
                
                <?php 
                if (isset($errorMessage)) { ?>
                    <div class="">
                        <div><?php echo($errorMessage);?></div>
                    </div>
                <?php } else { ?>
                    <div class="">
                        <div>Please sign in.</div>
                    </div>
                <?php } ?>
                
              <div class="form-group">
                <label for="loginName"></label>
                <input type="text" class="form-control bm-input__text" id="loginName" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="loginPass"></label>
                <input type="password" class="form-control bm-input__text" id="loginPass" name="password" placeholder="Password">
              </div>
                <row> <button type="submit" class="btn btn-primary bm-btn" id="loginBtn" name="submit">Sign In</button> </row>
            </form>
        </div>
    
    </div>
    
    <?php

        require('./includes/copyright-footer.php');
        require('./includes/footer-scripts.php');

    ?>
      
    <script>
        $("#loginName").focus();
    </script>
      
  </body>
</html>