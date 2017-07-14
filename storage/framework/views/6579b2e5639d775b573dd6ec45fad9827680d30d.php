<?php $__env->startSection('content'); ?>
		<h1 class="text-center"> Find Your Career </h1>
		<div id="map" class="container center"></div>
        <form method="GET" action="/careers-search">
    		<div id="search-bar" class="container">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="job" id="job" placeholder="Job">
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" name="region" id="region">
                        <option value="0">All Regions</option>
                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-4" id="search">
                    <input type="submit" value="Search" class="btn btn-primary col-md-12" />
                </div>
            </div>
        </form>
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
        	['Metro Operations, Head Office, Metro Sales',14.4042525,121.04696360000003,4],
        	['Southern Tagalog Region Operations',14.1007803,121.0793705,5],
        	['Bicol Region Operations',13.4209885,123.4136736,6],
        	['Iloilo',10.75844,122.50033740000003,7],
        	['Tanuan',11.1022234,125.02005699999995,8],
        	['Cebu',10.239339,123.79384800000003,9],
        	['Bacolod',10.7050794,122.96313710000004,10],
        	['Cagayan De Oro',8.494784,124.74618099999998,11],
        	['Zamboanga',6.965789999999999,122.14028099999996,12],
        	['Davao',7.030481361402168,125.51293283700943,13]
        ];

        var contents = [
        	'<h4> Cagayan Valley Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> North Luzon Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Central Luzon </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Modern Trade Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Metro Operations, Head Office, Metro Sales </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Southern Tagalog Region Operations </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Bicol Region Operations</h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Iloilo </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Tanuan </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Cebu </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Bacolod </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Cagayan De Oro </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Zamboanga </h4><a href=#><h5>0 Vacancies</h5></a>',
        	'<h4> Davao </h4><a href=#><h5>0 Vacancies</h5></a>'
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>