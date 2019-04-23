<?php
include "../email/m.php";
include 'C:/wamp64/www/Projet_integre1/core/clientC.php';


$cc=new clientC();

if (isset($_POST['mail']))
{
	$resultat = $cc->recupererClientMail($_POST['mail'],$cc->conn);

	$count = count($resultat);
  if($count==0)
  {
echo "mail doesnt exist";
  }
  else
  {

	 foreach ($resultat as $r)
	 {
		 	  		 $dest_mail=$r['email'];

		$rand = mt_rand(1000, 20000);
	    $message = 'Veuillez entrez ce code de reinitialisation pour avoir un nouveau mot de passe :'.trim($rand);
	    $cc->modifierClientPassword($r['pseudo'],$rand,$cc->conn);
	    mailing ($dest_mail,$message);
	 }

  }
}
?>
<html lang="en">
<head>
    <title>Ben Moussa Optique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/styleboxlogin.css">
    <link rel="stylesheet" href="../css/styleboxforgot.css">
    <link rel="stylesheet" href="../css/styleboxsubscribe.css">
</head>
  <body>

  <div class="site-wrap">

    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">


            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Ben Moussa Optic</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">

		<!--RETRIEVE PASSWORD FORM-->
<form  method="POST" name="newpassword" id="newpassword" action="resetPassword.php" ">
                      <input type="text" placeholder="ConfirmationCode" name="ConfirmationCode" id="ConfirmationCode" size="10" class="form-control" required>
					<?php if(!empty($_GET['message']))
					  {
                          $message = $_GET['message'];
                          echo '<p style="color:red;"> '.$message.'</p>'; //if we find a message in the URL, means there's an error
                       }

					   ?>
                      <input type="Password" placeholder="New Password" name="motdepasse" id="motdepasse" size="10" class="form-control" required>
                      <input type="Password" placeholder="Confirm new Password" name="motdepasse_conf" id="motdepasse_conf" size="10" class="form-control" required>
					<?php if(!empty($_GET['message2']))
					  {
                          $message2 = $_GET['message2'];
                          echo '<p style="color:red;"> '.$message2.'</p>'; //if we find a message in the URL, means there's an error
                       }

					   ?>
                      <input class="button" type="submit">

</form>



                  <script type="text/javascript" src="../js/trait.js"></script>

                  <script src="../js/jquery-3.3.1.min.js"></script>
                  <script src="../js/jquery-ui.js"></script>
                  <script src="../js/popper.min.js"></script>
                  <script src="../js/bootstrap.min.js"></script>
                  <script src="../js/owl.carousel.min.js"></script>
                  <script src="../js/jquery.magnific-popup.min.js"></script>
                  <script src="../js/aos.js"></script>

                  <script src="../js/main.js"></script>

  </body>
</html>
