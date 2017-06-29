@extends('layouts.master')

@section('content')
		<h1 class="text-center"> Find Your Career </h1>
		<div id="map" class="container"></div>
		<div id="search-bar" class="container">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="job" placeholder="Job">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="loc" placeholder="Location">
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary col-md-12">Search</button>
            </div>
        </div>
    <script>
      var map;
      function initMap() {
      	var philippines = {lat: 12.16822568, lng: 122.98095703};
        map = new google.maps.Map(document.getElementById('map'), { 	
	        	center: philippines,
	        	zoom: 6
        });

        // setMarkers(map);

        var regions = [
        	['Cagayan Valley Operations',16.9753758,121.8107079,0],
        	['North Luzon Operations',16.5662318,121.2626366,1],
        	['Central Luzon',15.4827722,120.7120023,2],
        	['Modern Trade Operations',14.6090537,121.0222565,3],
        	['Metro Operations, Head Office, Metro Sales',14.6090537,121.0222565,4],
        	['Southern Tagalog Region Operations',14.1007803,121.0793705,5],
        	['Bicol Region',13.4209885,123.4136736,6],
        	['Iloilo Plant',11.0049836,122.5372741,7],
        	['Tanuan Plant',11.1110256,125.0155856,8],
        	['Cebu Plant',10.607936,123.8857747,9],
        	['Bacolod Plant',10.6407389,122.9689565,10],
        	['Cagayan De Oro Plant',8.4542363,124.6318977,11],
        	['Zamboanga Plant',6.9214424,122.0790267,12],
        	['Davao Plant',7.190708,125.455341,13]
        ];

        var contents = [
        	'<h3> Cagayan Valley Operations </h3><a href=#>0 Vacancies</a>',
        	'<h3> North Luzon Operations </h3><a href=#>0 Vacancies</a>',
        	'<h3> Central Luzon </h3><a href=#>0 Vacancies</a>',
        	'<h3> Modern Trade Operations </h3><a href=#>0 Vacancies</a>',
        	'<h3> Metro Operations, Head Office, Metro Sales </h3><a href=#>0 Vacancies</a>',
        	'<h3> Southern Tagalog Region Operations </h3><a href=#>0 Vacancies</a>',
        	'<h3> Bicol Region </h3><a href=#>0 Vacancies</a>',
        	'<h3> Iloilo Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Tanuan Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Cebu Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Bacolod Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Cagayan De Oro Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Zamboanga Plant </h3><a href=#>0 Vacancies</a>',
        	'<h3> Davao Plant </h3><a href=#>0 Vacancies</a>'
        ];

        // var infowindow = new google.maps.InfoWindow({
        // 	content: "0 Vacancies"
        // });

        var infowindow = new google.maps.InfoWindow();
        var marker,i;

        for(i=0; i<regions.length;i++){
	        // infowindow[i] = new google.maps.InfoWindow({
	        // 	content: contents[i]
	        // });
	        region=regions[i];
	        marker = new google.maps.Marker({
	          position: {lat: region[1], lng: region[2]},
	          map: map,
	          title: region[0]
	        });

	        google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          infowindow.setContent(contents[i]);
			          infowindow.open(map, marker);
			        }
			      })(marker, i));
	    }

	   		console.log(infowindow.length);
    }
      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7G6W1Bacdwk-cXeQMnwVy31foc802U2w&callback=initMap"
    async defer></script>

@endsection