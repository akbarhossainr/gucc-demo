$(document).ready(function(){
  $(".main-navbar").sticky({topSpacing:0});


  $("#hide-topbar").click(function(){
  	$(".topbar").slideUp(300);
  });


});


<!-- google custom-map script -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <script>
    window.onload = function () {
      var styles = [
      {
        featureType: 'water', // set the water color
        elementType: 'geometry.fill', // apply the color only to the fill
        stylers: [
          { color: '#CCCCCC' }
        ]
      },{
        featureType: 'landscape.natural', // set the natural landscape
        elementType: 'all',
        stylers: [
          { hue: '#CCCCCC' },
          { lightness: 1 }
        ]
      }
      ,{
        featureType: 'poi', // set the point of interest
        elementType: 'geometry',
        stylers: [
          { hue: '#FAFAFA' },
          { saturation: -100 },
        ]
      },{
        featureType: 'road', // set the road
        elementType: 'geometry',
        stylers: [
          { hue: '#ff9800' },
          { lightness: 100 }
        ]
      },{
        featureType: 'road.local', // set the local road
        elementType: 'all',
        stylers: [
          { hue: '#FAFAFA' },
          { saturation: 0 },
          { lightness: -2 }
        ]
      }
    ];

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(19.451738, -99.131420),
      icon: 'http://theahr.tk/images/AHR.png',
      title: 'Hello World!',
      map:map
    });

    var options = {
      mapTypeControlOptions: {
        mapTypeIds: ['Styled']
      },
      center: marker.position,
      zoom: 16,
      zoomControl: true,
      scrollwheel: false,
      disableDefaultUI: true, 
      mapTypeId: 'Styled'
    };


    var div = document.getElementById('gucc-map');
    var map = new google.maps.Map(div, options);
    var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
    map.mapTypes.set('Styled', styledMapType);
    }
    </script>



