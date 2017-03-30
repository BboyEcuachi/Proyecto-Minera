<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <title>MAD CHILE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="public/css/docs.css" rel="stylesheet">
    <link href="public/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/ico/apple-touch-icon-57-precomposed.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.js"></script>

</head>
<div class="jumbotron masthead">
    <div class="splash"> <img src="public/img/2.jpg" alt=""> </div>
    <div class="nav-agency">
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container"> <a class="brand" href="index.php"> <img src="public/img/Logo U.png" alt=""></a>
                    <div id="main-nav">
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="index.php">Home</a> </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Noticias <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> "redireccion a listado de noticia por fechas" </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Servicios <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> "redireccion a informacion sobre servicios de la empresa" </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Clientes <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Links de clientes </a></li>
                                    </ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Proyectos <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"> Proyectos en Marcha </a></li>
                                        <li><a href="#"> Proyectos Realizados </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Nosotros <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/equipo.php"> Equipo de Trabajo Multidisciplinario </a></li>
                                        <li><a href="#"> Tecnologias </a></li>
                                        <li><a href="#"> Historia </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Contactanos <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> Fono - Direccion - Email </a></li>
                                        <li><a href="/mapa.php"> Mapa Direcciones </a></li>
                                        <li><a href="/mail.php"> Escribenos ahora </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-header text-center" align="center">
    <h1> Escribenos Ahora </h1>
    <h2></h2>

    <form action="contacto@madchile.cl" method="post" enctype="text/plain">
        Name:<br>
        <input type="text" name="name"><br>
        E-mail:<br>
        <input type="text" name="mail"><br>
        Comment:<br>
        <textArea type="text" name="comment" size="500">
			</textArea><br><br>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>
</div>

<footer class="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <blockquote>
                    <p class="testimonial">Calidad de servicio no es lo que tú das… Es lo que el cliente recibe.</p>
                    <p class="name"><b></b></p>
                </blockquote>
            </div>
        </div>
        <hr class="soften1">
        <div class="row-fluid">
            <div class="span3">
                <h4>Navegacion</h4>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="span3 MT70">
                <h4>Link de Utilidad</h4>
                <ul class="footer-links">
                    <li><a href="https://www.usm.cl">www.usm.cl</a></li>
                    <li><a href="https://www.industrias.usm.cl">www.industrias.usm.cl</a></li>
                    <li><a href="https://www.inf.utfsm.cl">www.inf.utfsm.cl</a></li>
                    <li><a href="https://www.siga.usm.cl">www.siga.usm.cl</a></li>
                </ul>
            </div>
            <div class="span3 MT70">
                <h4>Redes Sociales</h4>
                <p></p>
                <ul class="footer_social clearfix">
                    <li><a href="#" class="footer_facebook">Facebook</a></li>
                    <li><a href="#" class="footer_twitter">Twitter</a></li>
                    <li><a href="#" class="footer_googleplus">Google+</a></li>
                    <li><a href="#" class="footer_rss">RSS</a></li>
                </ul>
            </div>
        </div>
        <hr class="soften1 copyhr">
        <div class="row-fluid copyright">
            <div class="span12">Copyright &copy; 2016. ADSW</div>
        </div>
    </div>
</footer>
<script src="http://platform.twitter.com/widgets.js"></script>
<script src="public/js/jquery.js"></script>
<script src="public/js/google-code-prettify/prettify.js"></script>
<script src="public/js/bootstrap-transition.js"></script>
<script src="public/js/bootstrap-alert.js"></script>
<script src="public/js/bootstrap-modal.js"></script>
<script src="public/js/bootstrap-dropdown.js"></script>
<script src="public/js/bootstrap-scrollspy.js"></script>
<script src="public/js/bootstrap-tab.js"></script>
<script src="public/js/bootstrap-tooltip.js"></script>
<script src="public/js/bootstrap-popover.js"></script>
<script src="public/js/bootstrap-button.js"></script>
<script src="public/js/bootstrap-collapse.js"></script>
<script src="public/js/bootstrap-carousel.js"></script>
<script src="public/js/bootstrap-typeahead.js"></script>
<script src="public/js/bootstrap-affix.js"></script>
<script src="public/js/application.js"></script>
<script src="public/js/superfish.js"></script>
<script src="public/js/custom.js"></script>
<script>
    $(document).ready(function () {
        var showCaseItems = $('.show-case-item').hide();
        var splashes = $('.splash').hide();
        splashes.eq(0).show();
        showCaseItems.eq(0).show();
        var prevIndex = -1;
        var nextIndex = 0;
        var currentIndex = 0;
        $('#banner-pagination li a').click(function () {
            nextIndex = parseInt($(this).attr('rel'));
            if (nextIndex != currentIndex) {
                $('#banner-pagination li a').html('<img src="public/img/slidedot.png" alt="slide">');
                $(this).html('<img src="public/img/slidedot-active.png" alt="slide">');
                currentIndex = nextIndex;
                if (prevIndex < 0) prevIndex = 0;
                splashes.eq(prevIndex).css({
                    opacity: 1
                }).animate({
                    opacity: 0
                }, 500, function () {
                    $(this).hide();
                });
                splashes.eq(nextIndex).show().css({
                    opacity: 0
                }).animate({
                    opacity: 1
                }, 500, function () {});
                showCaseItems.eq(prevIndex).css({
                    opacity: 1
                }).animate({
                    opacity: 0
                }, 500, function () {
                    $(this).hide();
                    showCaseItems.eq(nextIndex).show().css({
                        opacity: 0
                    }).animate({
                        opacity: 1
                    }, 200, function () {});
                });
                prevIndex = nextIndex;
            }
            return false;
        });
    });
</script>
</body>
</html>
