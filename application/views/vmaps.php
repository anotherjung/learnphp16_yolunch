
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDSzEFsYwM4_rrmx8v-duBNpO6NJfDz3Q"></script>
  <script src='http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.9/markerwithlabel/src/markerwithlabel.js'></script>
  <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/styledmarker/src/StyledMarker.js"></script>
  <script>
    
    function initialize() {
      var saveWidget;
      var myLatlng = new google.maps.LatLng(37.376818,-121.912378);
        var mapOptions = {
        zoom: 15,
        center: myLatlng
      };

      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var trafficLayer = new google.maps.TrafficLayer();
        trafficLayer.setMap(map);


    var styleMaker = new StyledMarker({
      styleIcon: new StyledIcon(StyledIconTypes.BUBBLE,{color:"f9F8F8",text:"Coding Dojo"}),
      position: new google.maps.LatLng(37.376818,-121.912378),
      map: map
    });
    var widgetDiv = document.getElementById('save-widget');
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

<?php
  foreach ($restaurants as $restaurant) { ?>
    var latLng<?=$restaurant['id']?> = 
    new google.maps.LatLng(<?=$restaurant['latitude']?>,
                <?=$restaurant['longitude']?>);
    <?php

    $min = floor($restaurant['duration'] / 60);
    $sec = $restaurant['duration'] % 60;
    $members= "";
    ?>
    var content<?=$restaurant['id']?> = 
    "<h2><?=$restaurant['name']?></h2>" + 
    "<p><?=$restaurant['address']?></p>" +
    "<p><?=$restaurant['description']?></p>" +
    "<p><?=$restaurant['distance']?> miles</p>" +
    "<p><?=$min?> Min <?=$sec?> Sec</p>" +


    "<h2>Reviews</h2>" +
    <?php
      foreach ($reviews as $review) {
        if($review['restaurants_id'] == $restaurant['id']) { ?>
            "<p><b><?=$review['user_name']?> says</b></p>" +
            "<p><?=$review['review']?></p>" +
<?      }
      } 
    ?>
    "";
    var infowindow<?=$restaurant['id']?> = new google.maps.InfoWindow({
         content: content<?=$restaurant['id']?>
  });
    
    <?php
    if($restaurant['cuisine'] == 'korean') {
      $color = 'f5c0ff';  
    }
    else if($restaurant['cuisine'] == 'italian') {
      $color = '75e398';  
    }
    else if($restaurant['cuisine'] == 'american') {
      $color = 'd1e28e';  
    }
    else if($restaurant['cuisine'] == 'chinese') {
      $color = 'a3daf6';  
    }
    else if($restaurant['cuisine'] == 'japanese') {
      $color = 'fd7214';  
    }
    else if($restaurant['cuisine'] == 'mexican') {
      $color = 'daf1ff';  
    }
    else if($restaurant['cuisine'] == 'viet') {
      $color = 'efffda';  
    }
    else {
      $color = 'f9F8F8';
    }
    ?>

    var saveWidgetOptions<?=$restaurant['id']?> = {
        place: {
          
          placeId: "<?=$restaurant['place_id']?>",
          location: {lat: <?=$restaurant['latitude']?>, lng: <?=$restaurant['longitude']?>}
        },
        attribution: {
          source: 'Google Maps JavaScript API',
          webUrl: 'https://developers.google.com/maps/'
        }
      };

    var styleMarker<?=$restaurant['id']?> = new StyledMarker({
      styleIcon: new StyledIcon(StyledIconTypes.BUBBLE,{color:"<?=$color?>",text:"<?=$restaurant['name']?>"}),
      position: saveWidgetOptions<?=$restaurant['id']?>.place.location,
      map: map
    });
    // var marker<?=$restaurant['id']?> = new google.maps.Marker({
   //      position: latLng<?=$restaurant['id']?>,
   //      animation: google.maps.Animation.DROP,
   //      map: map,
   //      title: "<?=$restaurant['name']?>"
   //  });
    google.maps.event.addListener(styleMarker<?=$restaurant['id']?>, 'click', function() {
      // infowindow<?=$restaurant['id']?>.open(map,styleMarker<?=$restaurant['id']?>);
      saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions<?=$restaurant['id']?>);
      widgetDiv.innerHTML = (content<?=$restaurant['id']?>);
    });
 <?}?>  
    
}
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <style type="text/css">



  </style>


    <div class="widget btn-lg" id="save-widget">
        <h2>Yo! What's for Lunch?</h2>
      </div>

    <div class="c100" id="map-canvas"></div>


