<?php 
  echo validation_errors(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DELPHI - Sistema para la gestion de datos</title>
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.backstretch.min.js"></script>

  </head>
  <body id="aa">
	  <div id="login-page">
	  	<div class="container">
		       
            <?php $atributos = array('id'=> 'form' , 'class' => 'form-login');
              echo form_open('verifylogin', $atributos);
            ?>
            <h2 class="form-login-heading">Inicio de sesion</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" id="username" placeholder="Usuario" autofocus>
		            <br>
		            <input id="password" type="password" class="form-control" placeholder="Contrasena">
		            <br>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Iniciar sesion</button>
		            <hr>          	
		        </div>
		      </form>	  	
	  	</div>
	  </div>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
   
    <script>
    $('#aa').css('background-image', 'url(<?php echo base_url();?>assets/img/dep_img.jpg)');
       // $.backstretch("<?php echo base_url();?>/assets/img/delphi_fondo.jpg", {speed: 500});
    </script>


  </body>
</html>
