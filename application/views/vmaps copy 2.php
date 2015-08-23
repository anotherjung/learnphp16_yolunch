<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>


<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/styledmarker/src/StyledMarker.js"></script>

<script>


function initialize() {
  var map;
  var saveWidget;
  var myOptions = {
    zoom: 17,
    center: {lat: 37.376818, lng: -121.912378}
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      myOptions);

  // Create a new SaveWidgetOptions object for Google Sydney.
  var saveWidgetOptions = {
    place: {
      // ChIJN1t_tDeuEmsRUsoyG83frY4 is the place Id for Google Sydney.
      placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4',
      location: {lat: -33.866647, lng: 151.195886}
    },
    attribution: {
      source: 'Google Maps JavaScript API',
      webUrl: 'https://developers.google.com/maps/'
    }
  };

var styleMaker = new StyledMarker({
styleIcon: new StyledIcon(StyledIconTypes.BUBBLE,{color:"f9F8F8",text:"Coding Dojo"}),
position: new google.maps.LatLng(37.376818,-121.912378),
map: map
});


  new google.maps.Marker({
    map: map,
    position: saveWidgetOptions.place.location
  });

  var widgetDiv = document.getElementById('save-widget');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(widgetDiv);

  // Append a Save Control to the existing save-widget div.
  saveWidget = new google.maps.SaveWidget(widgetDiv, saveWidgetOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>



 <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #save-widget {
        width: 300px;
        box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px;
        background-color: white;
        padding: 10px;
        font-family: Roboto, Arial;
        font-size: 13px;
        margin: 15px;
      }

    </style>


 <div id="map-canvas"></div>
    <div id="save-widget">
      <strong>Google Sydney</strong>
      <p>We’re located on the water in Pyrmont, with views of the Sydney Harbour Bridge, The
          Rocks and Darling Harbour. Our building is the greenest in Sydney. Inside, we have a
          "living wall" made of plants, a tire swing, a library with a nap pod and some amazing
          baristas.</p>
    </div>


