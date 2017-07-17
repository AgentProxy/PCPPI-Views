@extends('layouts.master')

@section('content')
		<h1 class="text-center"> Find Your Career </h1>
        <form method="GET" action="/careers-search">
            <div id="search-bar" class="container">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job">
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" name="region" id="region">
                        <option value="0">All Regions</option>
                        @foreach($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4" id="search">
                    <input type="submit" value="Search" class="btn btn-primary col-md-12" />
                </div>
            </div>
        </form>
		<div id="map" class="container center"></div>
    <script>
      var map;
      function initMap() {
      	var philippines = {lat: 12.16822568, lng: 122.98095703};
        map = new google.maps.Map(document.getElementById('map'), { 	
	        	center: philippines,
	        	zoom: 6
                // disableDoubleClickZoom: true
        });

        // setMarkers(map);

        var regions = [
        	['Cagayan Valley Operations',16.9679036,121.77049050000005,0],
        	['North Luzon Operations',16.2151433,120.50037500000008,1],
        	['Central Luzon',15.070145,120.649044,2],
        	['Modern Trade Operations',14.5881219,121.0439725,3],
        	['Metro Operations',14.4042525,121.04696360000003,4],
            // ['Head Office',14.4042525,121.04696360000003,5],
            // ['Metro Sales',14.4042525,121.04696360000003,6],
        	['Southern Tagalog Region Operations',14.1007803,121.0793705,7],
        	['Bicol Region Operations',13.4209885,123.4136736,8],
        	['Iloilo',10.75844,122.50033740000003,9],
        	['Tanuan',11.1022234,125.02005699999995,10],
        	['Cebu',10.239339,123.79384800000003,11],
        	['Bacolod',10.7050794,122.96313710000004,12],
        	['Cagayan De Oro',8.494784,124.74618099999998,13],
        	['Zamboanga',6.965789999999999,122.14028099999996,14],
        	['Davao',7.030481361402168,125.51293283700943,15],
            ['Cabuyao', 14.23326,121.10077100000001,16]
        ];

        var contents = [
        	'<h4> Cagayan Valley Operations </h4><a href="/careers-search/1"><h5>{{count($vacancies->where("region_id",1))}} Vacancies</h5></a>',
        	'<h4> North Luzon Operations </h4><a href="/careers-search/2"><h5>{{count($vacancies->where("region_id",2))}} Vacancies</h5></a>',
        	'<h4> Central Luzon </h4><a href="/careers-search/3"><h5>{{count($vacancies->where("region_id",3))}} Vacancies</h5></a>',
        	'<h4> Modern Trade Operations </h4><a href="/careers-search/4"><h5>{{count($vacancies->where("region_id",4))}} Vacancies</h5></a>',

        	'<h4> Metro Operations </h4><a href="/careers-search/5"><h5>{{count($vacancies->where("region_id",5))}} Vacancies</h5></a> <hr/> <h4> Head Office </h4><a href="/careers-search/16"><h5>{{count($vacancies->where("region_id",16))}} Vacancies</h5></a> <hr /> <h4> Metro Sales </h4><a href="/careers-search/17"><h5>{{count($vacancies->where("region_id",17))}} Vacancies</h5></a>',

            // '<h4> Head Office </h4><a href="/careers-search/6"><h5>{{count($vacancies->where("region_id",8))}} Vacancies</h5></a>',
            // '<h4> Metro Sales </h4><a href="/careers-search/7"><h5>{{count($vacancies->where("region_id",9))}} Vacancies</h5></a>',
        	'<h4> Southern Tagalog Region Operations </h4><a href="/careers-search/6"><h5>{{count($vacancies->where("region_id",6))}} Vacancies</h5></a>',
        	'<h4> Bicol Region Operations</h4><a href="/careers-search/7"><h5>{{count($vacancies->where("region_id",7))}} Vacancies</h5></a>',
        	'<h4> Iloilo </h4><a href="/careers-search/8"><h5>{{count($vacancies->where("region_id",8))}} Vacancies</h5></a>',
        	'<h4> Tanuan </h4><a href="/careers-search/9"><h5>{{count($vacancies->where("region_id",9))}} Vacancies</h5></a>',
        	'<h4> Cebu </h4><a href="/careers-search/10"><h5>{{count($vacancies->where("region_id",10))}} Vacancies</h5></a>',
        	'<h4> Bacolod </h4><a href="/careers-search/11"><h5>{{count($vacancies->where("region_id",11))}} Vacancies</h5></a>',
        	'<h4> Cagayan De Oro </h4><a href="/careers-search/12"><h5>{{count($vacancies->where("region_id",12))}} Vacancies</h5></a>',
        	'<h4> Zamboanga </h4><a href="/careers-search/13"><h5>{{count($vacancies->where("region_id",13))}} Vacancies</h5></a>',
        	'<h4> Davao </h4><a href="/careers-search/14"><h5>{{count($vacancies->where("region_id",14))}} Vacancies</h5></a>',
            '<h4> Cabuyao </h4><a href="/careers-search/15"><h5>{{count($vacancies->where("region_id",15))}} Vacancies</h5></a>'
        ];

        // var regions = [
        //     ['Cagayan Valley Operations',16.9679036,121.77049050000005,0],
        //     ['North Luzon Operations',16.2151433,120.50037500000008,1],
        //     ['Central Luzon',15.070145,120.649044,2],
        //     ['Modern Trade Operations',14.5881219,121.0439725,3],
        //     ['Metro Operations,Head Office,Metro Sales',14.4042525,121.04696360000003,4],
        //     // ['Head Office',14.4042525,121.04696360000003,5],
        //     // ['Metro Sales',14.4042525,121.04696360000003,6],
        //     ['Southern Tagalog Region Operations',14.1007803,121.0793705,7],
        //     ['Bicol Region Operations',13.4209885,123.4136736,8],
        //     ['Iloilo',10.75844,122.50033740000003,9],
        //     ['Tanuan',11.1022234,125.02005699999995,10],
        //     ['Cebu',10.239339,123.79384800000003,11],
        //     ['Bacolod',10.7050794,122.96313710000004,12],
        //     ['Cagayan De Oro',8.494784,124.74618099999998,13],
        //     ['Zamboanga',6.965789999999999,122.14028099999996,14],
        //     ['Davao',7.030481361402168,125.51293283700943,15]
        // ];

        // var contents = [
        //     '<h4> Cagayan Valley Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> North Luzon Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Central Luzon </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Modern Trade Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Metro Operations </h4><a href=#><h5>0 Vacancies</h5></a><hr/><h4> Head Office </h4><a href=#><h5>0 Vacancies</h5></a><hr/><h4> Metro Sales </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Southern Tagalog Region Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Bicol Region Operations</h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Iloilo </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Tanuan </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Cebu </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Bacolod </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Cagayan De Oro </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Zamboanga </h4><a href=#><h5>0 Vacancies</h5></a>',
        //     '<h4> Davao </h4><a href=#><h5>0 Vacancies</h5></a>'
        // ];
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