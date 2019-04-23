<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Moussa optic!| </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
		  
            <form action="FonctionLogin.php" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username"  name="pseudoA" />
				<?php if(!empty($_GET['message'])) 
					  {
                          $message = $_GET['message'];
                          echo '<p style="color:red;"> '.$message.'</p>'; //if we find a message in the URL, means there's an error 
                       }
					  
					   ?>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password"  name="mdpA" />
				<?php if(!empty($_GET['message2'])) 
					  {
                          $message2 = $_GET['message2'];
                          echo '<p style="color:red;"> '.$message2.'</p>'; //if we find a message in the URL, means there's an error 
                       }
					  
					   ?>
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value="login"></input>
              </div>

</form>
              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <!--<h1><i class="fa fa-paw"></i></h1>-->
                  <p></p>
                </div>
              </div>
            
			
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="ajouterAdmin.php" method="post">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="ID" required="" name="id" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Usename" required="" name="pseudoA" />
				 <?php if(!empty($_GET['message'])) 
					  {
                          $message = $_GET['message'];
                          echo '<p style="color:red;"> '.$message.'</p>'; //if we find a message in the URL, means there's an error 
                       }
					  
					   ?>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email"  name="emailA" />
              </div>
			   <div>
                <input type="password" class="form-control" placeholder="Password"  name="mdpA" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value="submit"></input>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                 <!-- <h1><i class="fa fa-paw"></i> </h1>-->
                  <p></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
	 <!-- /compose -->

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../../vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
