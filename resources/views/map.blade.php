@extends('layouts.master')

@section('content')
		<h1 class="text-center"> Find Your Career </h1>
		<div id="map" class="container center"></div>
		<div id="search-bar" class="container">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="job" placeholder="Job">
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="loc">
                    <option>Region 1</option>
                    <option>Region 2</option>
                    <option>Region 3</option>
                    <option>Region 4</option>
                    <option>Region 5</option>
                </select>
            </div>
            <div class="col-md-4" id="search">
                <a href="careers-search" class="btn btn-primary col-md-12" role="button">Search</a>
            </div>
        </div>
    <script>
      var map;
      function initMap() {
      	var philippines = {lat: 12.16822568, lng: 122.98095703};
        map = new google.maps.Map(document.getElementById('map'), { 	
	        	center: philippines,
	        	zoom: 6,
                disableDoubleClickZoom: true,
                scrollwheel:  false
        });

        // setMarkers(map);

        var regions = [
        	['Cagayan Valley Operations',16.9679036,121.77049050000005,0],
        	['North Luzon Operations',16.2151433,120.50037500000008,1],
        	['Central Luzon',15.070145,120.649044,2],
        	['Modern Trade Operations',14.5881219,121.0439725,3],
        	['Metro Operations, Head Office, Metro Sales',14.4042525,121.04696360000003,4],
        	['Southern Tagalog Region Operations',14.1007803,121.0793705,5],
        	['Bicol Region',13.4209885,123.4136736,6],
        	['Iloilo Plant',10.75844,122.50033740000003,7],
        	['Tanuan Plant',11.1022234,125.02005699999995,8],
        	['Cebu Plant',10.239339,123.79384800000003,9],
        	['Bacolod Plant',10.7050794,122.96313710000004,10],
        	['Cagayan De Oro Plant',8.494784,124.74618099999998,11],
        	['Zamboanga Plant',6.965789999999999,122.14028099999996,12],
        	['Davao Plant',7.030481361402168,125.51293283700943,13]
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