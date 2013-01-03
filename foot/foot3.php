<head>
<meta content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(-31.735741, -60.521826);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
      
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
    
    var marker=new google.maps.Marker({
        position:latlng,
        title: 'BioCoop',
    });

marker.setMap(map);
  }

</script>
</head>
<body onload="initialize()">
 
 <footer class="footer">
    <div class="container" >
        <div class="row">
            <div class="span12">
                <div class="span5" style="text-align: right">
                    <h4 class="mifooth4">Contáctenos</h4>
                    <address class="mifoot">
                        <i class="icon-map-marker icon-white"></i> Pascual Palma 61<br>
                        Paraná - Entre Ríos - Argentina<br><br>
                        <i class="icon-headphones icon-white"></i> Tel: (0343) 4314807<br>
                        Fax: (0342) 423 0348<br><br>
                        <i class="icon-envelope icon-white"></i> <a href="mailto:biocoop@arnet.com.ar"> biocoop@arnet.com.ar </a><br>
                        <a href:"mailto:biocoop@hotmail.com"> biocoop@hotmail.com</a>   
                    </address>                 
                </div>
                <div class="span5">
                     <div id="map_canvas" style="width:400px; height:300px"></div>                   
                </div>
            </div>
        </div>
    
    </div>
    
</footer>
</body>
