<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login_v2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_v2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_v2/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_v2/css/main.css">
<!--===============================================================================================-->
</head>

<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-26">
						Welcome 
            <p> Enjoy your easier way to manage your booking, our dearest passenger <p>
                    </span> 
                    
    <?php
    include('auth.php');
    $login_button = '';
        
    if(isset($_GET["code"]))
    {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!isset($token['error'])){
            $google_client->setAccessToken($token['access_token']);
            $_SESSION['access_token'] = $token['access_token'];
            $google_service = new Google_Service_Oauth2($google_client);
            $data = $google_service->userinfo->get();
            
            if(!empty($data['given_name'])){
                $_SESSION['passenger_FirstName'] = $data['given_name'];
            }

            if(!empty($data['email'])){
                $_SESSION['passenger_email'] = $data['email'];
            }
        }
    }

    if(!isset($_SESSION['access_token'])){
        $login_button = '<a href="'.$google_client->createAuthUrl().'"><h2 class="button" >Login</h2></a>';
    }

    ?>
    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
                            <?php
        if($login_button == ''){
        header('location:view/tampil.php'); 
         }else{
         echo '<a align="center">'.$login_button . '</a>';
                    }
                    ?>
							</button>
						</div>
                </div>
					</div>
              
			</div>
		</div>
	</div>
                
                <div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
        <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor1/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor1/bootstrap/js/popper.js"></script>
        <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor1/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor1/daterangepicker/moment.min.js"></script>
        <script src="vendor1/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="vendor1/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>    
</body>
</html>