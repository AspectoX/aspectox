<?php
// Register API keys at https://www.google.com/recaptcha/admin
//$siteKey = '6Le9OwYTAAAAAHCZOat4rvEeHlJ0QHkYdc9FH6cp';
//$secret = '6Le9OwYTAAAAAIumsZNKs9T9Hfs3zJYeZtMImtHu';

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
//$lang = 'es-419';
?>

<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>AspectoX - diseño y expresión</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/template-fuentes.css" rel="stylesheet">
        <link href="css/template.css" rel="stylesheet">
        <link href="css/sky-forms.css" rel="stylesheet">
        
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSDNF8Ac0_TkS2_0lJUY3hShrhkl34dxA&sensor=false"></script>-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    </head>
    <body  onload="initialize()">
        <div class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="img/logoN.png">
                        <!--<div class="logo">Aspecto<span class="logo-rojo">X</span></div>-->
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="identidad.html">Identidad corporativa</a></li>
                        <li><a href="disenio.html">Diseño</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="custom-search">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>           
                </div>
            </div>
        </div>
        
        <section class="container destacado">
            <div class="raw">
                <img src="img/iso-decora.png" alt="aspecto-x" class="iso">
                <span class="tituloDestacado"><span class="textNaranja">Contactanos</span> por estos medios</span><br>
                <small style="color:#6D7072"><span class="textNaranja">Para mi</span> saber de usted y sus necesidades, sera un placer pero mucho más poder ayudarle a crecer en su negocio <br>
                <span class="textNaranja">No lo dude.</span> y utilize cualquiera de estos medios, para ponerce en contacto.</small>
            </div>
        </section>
        
        
        <section class="container">
            <div class="row">
            
                <div class="col-xs-12 col-md-3">
                    <div class="gris">
                        <div class="cajaTexto">
                            <div class="lista">
                                <div class="panel profile-photo">
                                    <img src="fotos/DSC_1619.JPG" alt="Lalo">
                                </div>
                                <span class="nombre">Edgardo Putelli</span>
                                <small class="ctitulo">diseñador gráfico/web</small>
                                <address>
                                    A.J. Carranza 1648 Dto 1<br>
                                    Buenos Aires Capital Federal<br>
                                    CP 1414
                                </address>
                                <span class="infoContac"><i class="fa fa-mobile"></i>+54 11 69960174</span>
                                <span class="infoContac"><i class="fa fa-whatsapp"></i>+54 11 69960174</span>
                                <span class="infoContac"><i class="fa fa-envelope-o"></i>aspectox.creativa@gmail.com</span>
                                <span class="infoContac"><i class="fa fa-facebook-official"></i>facebook.com/aspectox</span>
                                <span class="infoContac"><i class="fa fa-twitter"></i>twitter.com/aspectox</span>
                                <span class="infoContac"><i class="fa fa-google-plus"></i><a href="https://www.plus.google.com/u/0/117356964171374433448" target="_blank">Google+</a></span>
                            </div>
                        </div>
                        <div class="google-map-canvas" id="map-canvas">
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-md-9">
                    <div class="gris">
                        <div class="">                           
                            <h3>Dejenos su mensaje aquí</h3>
                            <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form sky-form-columns">
                                <fieldset>					
                                    <div class="row">
                                        <section class="col-xs-12 col-md-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-user"></i>
                                                <input type="text" name="name" id="name" placeholder="Nombre">
                                                <b class="tooltip tooltip-top-right">Nombre</b>
                                            </label>
                                        </section>

                                        <section class="col-xs-12 col-md-6">
                                            <label class="input">
                                                <i class="icon-append fa fa-envelope-o"></i>
                                                <input type="email" name="email" id="email" placeholder="Email">
                                                <b class="tooltip tooltip-top-right">Su e-mail</b>
                                            </label>
                                        </section>
                                    </div>

                                    <section>
                                        <label class="input">
                                            <i class="icon-append fa fa-tag"></i>
                                            <input type="text" name="subject" id="subject" placeholder="Asunto">
                                            <b class="tooltip tooltip-top-right">Asunto (opcional)</b>
                                        </label>
                                    </section>

                                    <section>
                                        <label class="textarea">
                                            <i class="icon-append fa fa-comment"></i>
                                            <textarea rows="4" name="message" id="message" placeholder="Mensaje"></textarea>
                                            <b class="tooltip tooltip-top-right">Su mensaje debe tener un (minimo de 10 caracteres)</b>
                                        </label>
                                    </section>

                                    <section>
                                        <label class="label">Introduzca los caracteres de abajo</label>
                                        <label class="input input-captcha">
                                            <img src="captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
                                            <input type="text" maxlength="6" name="captcha" id="captcha">
                                        </label>
                                    </section>

                                    <section>
                                        <label class="checkbox"><input type="checkbox" name="copy"><i></i>Enviame una copia a mi mail</label>
                                    </section>
                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn btn-theme-bg btn-lg ">Enviar mensaje</button>
                                    <!--<input class="btn btn-theme-bg btn-lg" type="submit" value="Enviar mensaje">-->
                                </footer>

                                <div class="message">
                                    <i class="fa fa-check"></i>
                                    <p>Su mensaje fue enviado con éxito!</p>
                                </div>
                            </form>
                        </div>
                        <script type="text/javascript">
                            $(function()
                            {
                                // Validation
                                $("#sky-form").validate(
                                {					
                                    // Rules for form validation
                                    rules:
                                    {
                                        name:
                                        {
                                            required: true
                                        },
                                        email:
                                        {
                                            required: true,
                                            email: true
                                        },
                                        message:
                                        {
                                            required: true,
                                            minlength: 10
                                        },
                                        captcha:
                                        {
                                            required: true,
                                            remote: 'captcha/process.php'
                                        }
                                    },

                                    // Messages for form validation
                                    messages:
                                    {
                                        name:
                                        {
                                            required: 'Please enter your name',
                                        },
                                        email:
                                        {
                                            required: 'Please enter your email address',
                                            email: 'Please enter a VALID email address'
                                        },
                                        message:
                                        {
                                            required: 'Please enter your message'
                                        },
                                        captcha:
                                        {
                                            required: 'Please enter characters',
                                            remote: 'Correct captcha is required'
                                        }
                                    },

                                    // Ajax form submition					
                                    submitHandler: function(form)
                                    {
                                        $(form).ajaxSubmit(
                                        {
                                            beforeSend: function()
                                            {
                                                $('#sky-form button[type="submit"]').attr('disabled', true);
                                            },
                                            success: function()
                                            {
                                                $("#sky-form").addClass('submited');
                                            }
                                        });
                                    },

                                    // Do not change code below
                                    errorPlacement: function(error, element)
                                    {
                                        error.insertAfter(element.parent());
                                    }
                                });
                            });			
                        </script>                        
                    </div>
                </div>
                
            </div>
        </section>
        
        <footer class="container">
           <a href="#0" class="cd-top">Top</a>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <h3>Tips 1</h3>
                    <p><negrita>Personalización:</negrita> A la hora de comenzar tu empresa es esencial que te preguntes cuál será tu target o público objetivo, es decir, quiénes serán tus potenciales clientes. Una vez determinado eso, puedes definir cómo quieres proyectarte.  Por ejemplo, ¿quieres destacar por ser una marca conservadora y tradicional o juvenil y original?</p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <h3>Tips 2</h3>
                    <p><negrita>Continuidad visual:</negrita> La identidad corporativa debe ser una entidad global que ayude a diferenciarte de la competencia. Para construirla debes elegir los colores y formas que te caracterizarán y que utilizarás en diferentes elementos para crear esta continuidad visual (diseñar los logos, crear la página web, en las campañas publicitarias, por ejemplo). El color y la forma deben ser constantes en todos los aspectos de desarrollo gráfico.</p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <h3>Tips 3</h3>
                    <p><negrita>Cuidado del detalle:</negrita> Hay aspectos generales que son imprescindibles, sin embargo, nunca hay que descuidar los detalles que son los que finalmente hacen la diferencia. La impresión de tarjetas con el logo de tu empresa y datos de contacto, papelería (encabezado de folios, presupuestos, facturas, sobres, por ejemplo), uso de firma corporativa en los correos electrónicos.  Una buena presentación de estos elementos siempre dejará una impresión positiva en el cliente.</p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <h3>Tips 4</h3>
                    <p><negrita>Solidez:</negrita> Una imagen corporativa sólida debe permanecer en el tiempo. Los clientes gradualmente se familiarizan con la esta identidad, y si se cambia de forma precipitada perderás el reconocimiento y consistencia que has ganado. Normalmente las imágenes corporativas ya creadas sólo se cambian en casos en los que se necesita una modernización o adaptación al mercado y son sumamente planeadas a través de múltiples estudios.</p>
                </div>                
            </div>
            <div class="footer-ins">
                web creada por: <i class="fa fa-aspectox" title="aspectox"></i> <span class="textoFooterAspecto">aspecto</span><span class="textoFooterX">-x</span><br>
                tecnología: <i class="fa fa-html5" title="Html 5"></i> - <i class="fa fa-css3" title="Css 3"></i><br>
                diseñado responsive design (para cualquier dispositivo) <i class="fa fa-boostrap" title="Boostrap"></i><br>
            </div>           
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

 

        
        <script>
            var map;
            function initialize() {
              var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(-34.5829712, -58.4388404)
              };
                
              map = new google.maps.Map(document.getElementById('map-canvas'),
                  mapOptions);                
              pos= new google.maps.LatLng(-34.5829712, -58.4388404)
              
            var marker = new google.maps.Marker({
                  position: pos,
                  map: map,
                  title:"aspecto-x",
                  animation: google.maps.Animation.DROP
              });                

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>