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

                <div class="row">
                    <div class="span8">
                        <h2>Control de Calidad</h2>
            
                        <p>
                        BioCoop participa de controles de calidad externos como COBER y CEMIC, y controles de calidad internos 
                        según procedimientos estandarizados. 
                        </p>    
                    </div>       
                   <div class="span2 pull-right">
                       <img src="img/iso90012008.png"/>
                   </div>
            </div>
        </div>
        
           <div class="row">
                <div class="span10 offset2">
                    
                    <div class="span3">
                        <img src="img/controlCalidadCober.png">
                    </div>
                    
                    <div class="span2">
                        <h3>COBER</h3>
                    </div>
                 
                    <div class="span3">
                        <ul class="unstyled">
                                <li>Hematología</li>
                                <li>Química Clínica</li>
                                <li>Hemostasia</li>
                            </ul>
                    </div>
            
                
            </div>
        </div>
        <hr>
        <div class="row">
                <div class="span10 offset2">
                    <div class="span3">
                        <img src="img/controlCalidadCemic.png">
                    </div>
                    
                    <div class="span2">
                        <h3>CEMIC</h3>
                    </div>
                    
                    <div class="span3">
                        <ul class="unstyled">
                               <li>Hematología</li>
                                <li>Química Clínica</li>
                                <li>Marcadores Tumorales</li>
                                <li>Hormonas</li>
                                <li>Serología</li>
                            </ul>
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