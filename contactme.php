<?php

if(isset($_POST['email'])) {

    $email_to = "aymarasamudio@gmail.com";

    $email_subject = "Contacto Sapuru";


    function died($error) {

        // your error code can go here

        echo "Hubo un error en tu mensaje. ";

        echo "Podría tener que ver con lo siguiente: <br /><br />";

        echo $error."<br /><br />";

        echo "Por favor intentalo nuevamente.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('Disculpas, parece que hay un error en tu mensaje. Intenta nuevamente.');

    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_message = "Detalles.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Aymará Samudio, Desarrollo Web">
<meta name="keywords" content="Diseño Web, Soluciones Web a medida, Profesionales, PyMEs, Emprendimientos">
<meta name="author" content="Aymará Samudio">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<title>Sapuru</title>

<!-- Open Graph data -->
<meta property="og:title" content="Sapuru" />
<meta property="og:type" content="site" />
<meta property="og:url" content=" http://sapuru.soy" />
<meta property="og:image" content=" http://sapuru.soy/images/ayma-mag.jpg" />
<meta property="og:description" content="Soluciones Web a medida para Profesionales, PyMEs y emprendimientos." />
<meta property="og:site_name" content="Sapuru" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Muli" rel="stylesheet">
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <h1><a href="index" class="navbar-brand"><img src="images/logo-purple-vect.png"></a></h1>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index">Inicio</a></li>
        <li><a href="servicios">Servicios</a></li>
        <li><a href="acerca-de">Acerca De</a></li>
        <li><a href="portfolio/index.html">Portfolio</a></li>
        <li><a href="http://blog.sapuru.soy" target="_blank">Blog</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
    </div>

  </div>
</div>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
     <div class="container">
          <div class="row">
                         <div class="blog-post-image">
                              <img src="images/ayma-4.png" class="img-responsive" alt="Aymará Samudio">
                         </div>
                         <div class="center">
                              <h2>Gracias por contactarme. Te responderé muy pronto.</h2>
                              <h3>Mientras tanto te invito a visitar el <a href="http://blog.sapuru.soy">blog</a>, o a conocer <a href="acerca-de">mi historia</a></h3>
                         </div>

     </div>
   </div>
</section>

<!-- Footer Section -->

<footer>
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-3">
        <img src="images/logo-purple-vect.png">
      </div>

      <div class="col-md-4 col-sm-4">
        <p></p>
      </div>

      <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-3">
        <p><a href="mailto:aymara@sapuru.soy">aymara@sapuru.soy</a></p>
        <p><a href="+5492615169434">(+54) 9 261 5169434</a></p>
      </div>

      <div class="clearfix col-md-12 col-sm-12">
        <hr>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="footer-copyright">
          <p>© Salvo que se aclare lo contrario | Todos los derechos reservados. <a href="http://sapuru.soy/acerca-de">Aymará Samudio</a></p>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <ul class="social-icon">
          <li><a href="http://facebook.com/sapuru.soy" class="fa fa-facebook"></a></li>
          <li><a href="http://twitter.com/_sapuru" class="fa fa-twitter"></a></li>
          <li><a href="https://ar.linkedin.com/in/aymarasamudio" class="fa fa-linkedin"></a></li>
          <li><a href="http://github.com/sapuru" class="fa fa-github"></a></li>
        </ul>
      </div>

    </div>
  </div>
</footer>


<!-- SCRIPTS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/82552/script.js');
</script>
<!-- End MailerLite Universal -->
</body>
</html>



<?php

}

?>
