<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- php top -->
        <?php
            include ("head/head.php");
         ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

    <!-- TOP -->
    <div class="row">
            <!-- php top -->
            <?php
                include ("top/top.php");
             ?>
    </div>
    
	<!-- Contenido de la p�gina -->
<!-- CONTENIDO -->
    <div class="row">

		<div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Biocoop</h1>
                <p>
							Somos la primer Cooperativa Bioquí­mica de la Provincia de Entre Rí­os, que presta servicios de 
							diagnóstico bioquí­micos, con una amplia trayectoria en Paraná y la Región, para satisfacer la creciente 
							demanda de nuestros socios y no socios brindando más y mejores servicios.                 
                </p>
                <p><a class="btn btn-info btn-large" href="historia.php">Leer más &raquo;</a></p>
            </div>

            <!-- Example row of columns -->
            <div class="row">
                
                <div class="span4 offset1">
          
                    <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                        <div class="carousel-inner" >
                            <div class="active item" >
                                <div class="miitem">
                                    <img src="img/iso90012008.png" style="width:150px; height: 150px;"/> 
                                    
                                </div>
                                <div class="carousel-caption" style="text-align: right">
                                        <p>ISO 9001:2008</p>
                                </div>

                            </div>
                            <div class="item">
                                <div class="miitem">
                                    <img src="img/controlCalidadCober.png"/>
                                </div>
                                <div class="carousel-caption" style="text-align: right">
                                        <p>COBER</p>
                                </div>
            
                            </div>
                            <div class="item">
                                <div class="miitem">
                                    <img src="img/controlCalidadCemic.png"/>
                                </div>
                                <div class="carousel-caption" style="text-align: right">
                                        <p>CEMIC</p>
                                </div>

                            </div>
                        </div>
                    <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                                                

                </div>
                <div class="span6">
                    <h3>Certificamos Calidad</h3>
                    <p style="text-align: justify">Nuestra misión es fortalecer nuestro Sistema de Gestión de la Calidad basado en Normas Internacionales, que consolide 
                        la Mejora Continua de todos nuestros procesos que hacen a los Servicios de Laboratorio de Análisis Clínicos, 
                        teniendo como principal eje de acción "la solidaridad", piedra fundamental del Cooperativismo.</p>
                    <p><a class="btn" href="controlCalidad.php">Leer más &raquo;</a></p>
                </div>
            </div>
          <hr>


        </div> <!-- /container -->    
        <!-- foot -->
        <div >
            <!-- php foot -->
                <?php
                include ("foot/foot.php");
                ?>
        </div>
    </div>
        
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

     <script src="js/vendor/bootstrap.min.js"></script>

     <script src="js/plugins.js"></script>
     <script src="js/main.js"></script>

     <script>
         var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
         (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
         g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
         s.parentNode.insertBefore(g,s)}(document,'script'));
     </script>
 </body>