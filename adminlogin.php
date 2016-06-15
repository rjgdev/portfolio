<html>

<head>
	<?php
		$strOut = "";
		$alert  = "";

		if(isset($_POST['form_username'])){
			require_once("supports/config.php");

			$username = $_POST['form_username'];
			$password = $_POST['form_password'];

			$sql  = "Select * from tblUsers where uname='".$username."' and upass='".$password."'";
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch();

			if (!$data){
				$alert = '<div class="alert alert-danger" role="alert" style="padding:0px; margin:0px; border-radius:0px;">
					        <a class="close" data-dismiss="alert" href="#" style="padding-right:15px; line-height:1.4;">×</a>Incorrect Username or Password!
					      </div>';
			}else{
				header('LOCATION:index.php');
			}

			$stmt=null;
		}

	?>

    <title>Portfolio Login</title>

    <!-- CSS -->
    <?php include("supports/header.php"); ?>
    <link rel="stylesheet" href="assets/css/mainstyle.css">

</head>
	
<body>

    <div class="container" style="padding-top:100px;">
  	
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">

            	<div class="form-top">
            		<div class="form-top-left">
            			<h3>Login as administrator</h3>
                		<p>Enter your username and password to log on:</p>
            		</div>
            		<div class="form-top-right">
            			<i class="fa fa-lock" style="padding-top:16px;"></i>
            		</div>
                </div>
                <?php echo $alert; ?>
                <div class="form-bottom">
                    <form role="form" action="index.php" method="post" class="login-form">
                    	<div class="form-group">
                    		<label class="sr-only" for="form-username">Username</label>
                        	<input type="text" name="form_username" placeholder="Username..." 		class="form-username form-control" 	id="form_username">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password">Password</label>
                        	<input type="password" name="form_password" placeholder="Password..." 	class="form-password form-control" 	id="form_password">
                        </div>
                        <button type="submit" class="btn">Sign in!</button>
                    </form>
                </div>
            </div>
        </div>                
    </div>

    <?php include("supports/footer.php") ?>
</body>
</html>
