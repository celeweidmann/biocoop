<!DOCTYPE html>     
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
       <?php
            include ("head/head.php");
    ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <!-- head -->
        <div>
           <!-- php top -->
                <?php
                include ("top/top.php");
                ?>
        </div>  
        

    <!-- Contenido de la pagina -->

        <div class="container">
            <div class="hero-unit">
                <h2>Consejo de Administración de BIOCOOP</h2>
            </div>
            
            <div class="row">
                <div class="span10"style="text-align: center">
                    <div class="span3">
                       <button class="disabled btn btn-inverse">Consejo</button>
                       
                    </div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-3.jpg"/>
                        <button class="disabled btn btn-success btn-block">Presidente</button>
                        <h5>Dr. Raúl Alesso</h5>
                    </div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/fashion-q-c-100-100-6.jpg"/>
                        <button class="disabled btn btn-success btn-block">Secretaria</button>
                        <h5>Dra. Alicia Nussbaun</h5>
                    </div>
                    <div class="span2"> 
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-7.jpg"/>
                        <button class="disabled btn btn-success btn-block">Tesorera</button>
                        <h5>Dra. Estela Hure</h5>
                    </div>
                </div>    
            </div><hr>
            <div class="row">
                <div class="span11"style="text-align: center">
                    <div class="span1 offset1">
                       <button class="disabled btn btn-inverse">Vocales</button>
                       
                    </div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-3.jpg"/>
                        <button class="disabled btn btn-success btn-block">Vocal 1ª</button>
                        <h5>Dr. Javier Fernandez</h5>
                    </div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/fashion-q-c-100-100-6.jpg"/>
                        <button class="disabled btn btn-success btn-block">Vocal 2º</button>
                        <h5>Dra. Monica Stello</h5>
                    </div>
                    <div class="span2"> 
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-7.jpg"/>
                        <button class="disabled btn btn-success btn-block">Vocal 1º Suplente</button>
                        <h5>Dra. Lucila Gómez</h5>
                    </div>
                    <div class="span2"> 
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-7.jpg"/>
                        <button class="disabled btn btn-success btn-block">Vocal 2º Suplente</button>
                        <h5>Dra. Lidia Falcón</h5>
                    </div>
                </div>   
            </div><hr>
            <div class="row">
                <div class="span10"style="text-align: center">
                    <div class="span3">
                       <button class="disabled btn btn-inverse">Síndicos</button>
                    </div>
                    <div class="span1"></div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/people-q-c-100-100-3.jpg"/>
                        <button class="disabled btn btn-success btn-block">Síndico</button>
                        <h5>Dra. Susana Grieve</h5>
                    </div>
                    <div class="span2">
                        <img class="img-polaroid" src="http://lorempixel.com/output/fashion-q-c-100-100-6.jpg"/>
                        <button class="disabled btn btn-success btn-block">Síndico Suplente</button>
                        <h5>Dra. Jacobo Elberg</h5>
                    </div>
                </div>    
            </div>
        </div> <!-- /container -->    

        <!-- foot -->
        <div >
            <hr>
            <!-- php foot -->
                <?php
                include ("foot/foot.php");
                ?>
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