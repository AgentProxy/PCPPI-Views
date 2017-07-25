<?php $__env->startSection('content'); ?>

        <div class="container bg-grey">
		<h1 class="text-center bold" id="findcareer"> Find Your Career </h1>
        </div>
        <form method="GET" action="/careers-retrieve" class="bg-grey">
            <div id="search-bar" class="container">
                <div class="row">
                    <div class="form-group col-sm-3">
                        <select class="form-control" name="region" id="region">
                            <option value="0">All Regions</option>
                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <select class="form-control" name="function" id="function">
                            <option value="0">All Functions</option>
                            <?php $__currentLoopData = $functions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $function): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($function->id); ?>"><?php echo e($function->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <input type="text" class="form-control" name="job" id="job" placeholder="Job">
                    </div>
                    <div class="col-sm-3" id="search">
                        <input type="submit" value="Search" class="btn btn-primary" style="width: 100%;" />
                    </div>
                </div>
            </div>
        </form>
        <div class="container bg-grey last">
		<div id="map" class="container center"></div>
        </div>
    <script>
      var map;
      function initMap() {
      	var philippines = {lat: 12.16822568, lng: 122.98095703};
        map = new google.maps.Map(document.getElementById('map'), { 	
	        	center: philippines,
	        	zoom: 6
        });

        var regions = [
        	['Cagayan Valley Operations',16.9679036,121.77049050000005,0],
        	['North Luzon Operations',16.2151433,120.50037500000008,1],
        	['Central Luzon',15.070145,120.649044,2],
        	['Modern Trade Operations',14.5881219,121.0439725,3],
        	['Metro Operations',14.4042525,121.04696360000003,4],
            // ['Head Office',14.4042525,121.04696360000003,5],
            // ['Metro Sales',14.4042525,121.04696360000003,6],
        	['Southern Tagalog Region Operations',14.1007803,121.0793705,5],
        	['Bicol Region Operations',13.4209885,123.4136736,6],
        	['Iloilo',10.75844,122.50033740000003,7],
        	['Tanuan',11.1022234,125.02005699999995,8],
        	['Cebu',10.239339,123.79384800000003,9],
        	['Bacolod',10.7050794,122.96313710000004,10],
        	['Cagayan De Oro',8.494784,124.74618099999998,11],
        	['Zamboanga',6.965789999999999,122.14028099999996,12],
        	['Davao',7.030481361402168,125.51293283700943,13],
            ['Cabuyao', 14.23326,121.10077100000001,14]
        ];

        var contents = [
        	'<h4> Cagayan Valley Operations </h4><a href="/careers-retrieve/1"><h5><?php echo e(count($vacancies->where("region_id",1))); ?> Vacancies</h5></a>',
        	'<h4> North Luzon Operations </h4><a href="/careers-retrieve/2"><h5><?php echo e(count($vacancies->where("region_id",2))); ?> Vacancies</h5></a>',
        	'<h4> Central Luzon </h4><a href="/careers-retrieve/3"><h5><?php echo e(count($vacancies->where("region_id",3))); ?> Vacancies</h5></a>',
        	'<h4> Modern Trade Operations </h4><a href="/careers-retrieve/4"><h5><?php echo e(count($vacancies->where("region_id",4))); ?> Vacancies</h5></a>',
        	'<h4> Metro Operations </h4><a href="/careers-retrieve/5"><h5><?php echo e(count($vacancies->where("region_id",5))); ?> Vacancies</h5></a> <hr/> <h4> Head Office </h4><a href="/careers-retrieve/6"><h5><?php echo e(count($vacancies->where("region_id",6))); ?> Vacancies</h5></a> <hr /> <h4> Metro Sales </h4><a href="/careers-retrieve/7"><h5><?php echo e(count($vacancies->where("region_id",7))); ?> Vacancies</h5></a>',

            // '<h4> Head Office </h4><a href="/careers-search/6"><h5><?php echo e(count($vacancies->where("region_id",8))); ?> Vacancies</h5></a>',
            // '<h4> Metro Sales </h4><a href="/careers-search/7"><h5><?php echo e(count($vacancies->where("region_id",9))); ?> Vacancies</h5></a>',
        	'<h4> Southern Tagalog Region Operations </h4><a href="/careers-retrieve/8"><h5><?php echo e(count($vacancies->where("region_id",8))); ?> Vacancies</h5></a>',
        	'<h4> Bicol Region Operations</h4><a href="/careers-retrieve/9"><h5><?php echo e(count($vacancies->where("region_id",9))); ?> Vacancies</h5></a>',
        	'<h4> Iloilo </h4><a href="/careers-retrieve/10"><h5><?php echo e(count($vacancies->where("region_id",10))); ?> Vacancies</h5></a>',
        	'<h4> Tanuan </h4><a href="/careers-retrieve/11"><h5><?php echo e(count($vacancies->where("region_id",11))); ?> Vacancies</h5></a>',
        	'<h4> Cebu </h4><a href="/careers-retrieve/12"><h5><?php echo e(count($vacancies->where("region_id",12))); ?> Vacancies</h5></a>',
        	'<h4> Bacolod </h4><a href="/careers-retrieve/13"><h5><?php echo e(count($vacancies->where("region_id",13))); ?> Vacancies</h5></a>',
        	'<h4> Cagayan De Oro </h4><a href="/careers-retrieve/14"><h5><?php echo e(count($vacancies->where("region_id",14))); ?> Vacancies</h5></a>',
        	'<h4> Zamboanga </h4><a href="/careers-retrieve/15"><h5><?php echo e(count($vacancies->where("region_id",15))); ?> Vacancies</h5></a>',
        	'<h4> Davao </h4><a href="/careers-retrieve/16"><h5><?php echo e(count($vacancies->where("region_id",16))); ?> Vacancies</h5></a>',
            '<h4> Cabuyao </h4><a href="/careers-retrieve/17"><h5><?php echo e(count($vacancies->where("region_id",17))); ?> Vacancies</h5></a>'
        ];

        var infowindow = new google.maps.InfoWindow();
        var marker,i;

        for(i=0; i<regions.length;i++){
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