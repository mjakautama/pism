<!DOCTYPE html>
<html>
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
<head>

  <title>Market Place Information System</title>  <!-- Bootstrap Core -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Custom 
  <link rel="stylesheet" href="assets/css/admin.css">
  <!-- Bootstrap Slider -->
  <link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap Core -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- Bootstrap Slider -->
  <script type="text/javascript" src="assets/js/bootstrap-slider.min.js"></script>
</head>

<style>
	html, body{
	  height: 100%;
	  margin: 0;
	  padding: 0;
		overflow-y: hidden;
	}
	.controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  }
</style>

<body style="background:#626262;">
	<div class="container-fluid" style="height:inherit;">
		<div class="row" style="height:inherit;">

			<div class="col-lg-3" style="height:inherit;">
				<div class="nav navbar-nav side-nav">
					<div class="text-left row">
						<div class="col-md-11 pull-left text-center">
							<img src="assets/img/pis.png" height="80px">
						</div>
					</div>

					<hr></hr> 
                                        <div class="text-left row">
						<div class="col-md-1 pull-left">
							<i class="fa fa-home"></i>
						</div>
                                                <div class="col-md-10">
							<b>Lokasi Anda</b>
						</div>
						<div class="col-md-10">
							<b id="alamatRumah"></b>
						</div>
						<div class="col-md-11 pull-right">
							<p id="alamatJalan"></p>
						</div>
					</div>
                                        
                                        <hr></hr>
					<div class="text-left row">
						<div class="col-md-1 pull-left">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="col-md-11">
							<b>Pasar</b>
						</div>
						<br>
						<br>
						<div class="col-md-1 pull-left">
							&nbsp;
						</div>
						<div class="col-md-2 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Pasar]" checked><br>Tradisional
						</div>
						<div class="col-md-3 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Alfamart]"><br>Alfamart
						</div>
						<div class="col-md-3 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Indomaret]"><br>Indomaret
						</div>
						<div class="col-md-3 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Mall]"><br>Mall
						</div>
						<div class="col-md-3 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Circle K]"><br>Circle K
						</div>
					</div>

					<hr></hr>

					<div class="text-left row">
						<div class="col-md-1 pull-left">
							<i class="fa fa-circle"></i>
						</div>
						<div class="col-md-11" style="margin-bottom:5px;">
							<b>Radius Pencarian</b>
						</div>
						<div class="col-md-1 pull-left">
							&nbsp;
						</div>
						<div class="col-md-8 pull-left">
							<input id="ex1"
								data-slider-id='ex1Slider'
								type="text"
								data-slider-min="3"
								data-slider-max="30"
								data-slider-step="1"
								data-slider-value="15"
							/>
						</div>
						<div class="col-md-2 pull-left">
							<p id="radNum" class="text-left"></p>
						</div>
					</div>

					<hr></hr>

					<div class="text-left row">
						<div class="col-md-1 pull-left">
							<i class="fa fa-check"></i>
						</div>
						<div class="col-md-11" style="margin-bottom:5px;">
							<b>Rekomendasi</b>
						</div>
						<div class="col-md-1 pull-left">
							&nbsp;
						</div>
						<div class="col-md-10 pull-left" style="overflow-y:auto; height:270px;">
							<ul id="rekomendasi" class="nav navbar-nav">
							</ul>
						</div>
					</div>
				</div>
			</div>

      <div class="col-lg-9" style="height:inherit;">
				<input id="pac-input" class="controls" type="text" placeholder="Type Your location...">
				<div id="myMap" style="height:100%;margin-left:-1%; margin-right:-1%;"></div>
      </div>

			<div class="modal fade col-lg-6 col-lg-offset-3" id="detail">
		    <div class="modal-content">
		      <div class="row">
		        <div class="col-lg-12">
		          <div class="modal-body">
		            <h2 id="detailNama"></h2>
								<h4 id="detailAlamat"></h2>
								<br>
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<div id="gallery" class="carousel-inner">
										<div class="item active">
										</div>
									</div>
									<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Sebelumnya</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Selanjutnya</span>
									</a>
								</div>
								<br>
								<div id="detailText" class="text-left">
								</div>
								<br>
		            <a data-dismiss="modal" class="btn btn-warning pull-right">Tutup</a>
								<h3>&nbsp;</h3>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>

    </div>
	</div>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG1wy8E-WZuD5kvCYMODyh9fZ2RConDkQ&region=ID&language=id&libraries=places&callback=getLoc" async defer></script>
	<script type="text/javascript">
		var map, geocoder, service, circle, myLatlng, radius=1000, status, directionsDisplay, directionsService, myLocation, infoHere;
		var markers = [], nearby = [], keyword = [], nearest = [];
		var homeIcon = 'http://maps.gstatic.com/mapfiles/ms2/micons/red-pushpin.png';
		var foundIcon = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';

		$(document).ready(function(){
			radius = $('#ex1').val()*1000;
			setKeyword();
		});

		//ini slider buat radius
		$('#ex1').slider({
			formatter: function(value) {
				radius = value*1000;
				$('#radNum').html(value+'Km');
				return value+" Km";
			}
		});
		$('#ex1').change(function(){
			runQuery();
		});

		//radio buat tingkat
		$('input[name=tingkat]').change(function(){
			setKeyword();
			runQuery();
		});

		function setKeyword(){
			keyword = $('input[name=tingkat]:checked').val();
		}

		//buat ngambil lokasi pake browser
		function getLoc(){
			if(navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(myPos,errPos);
		  }
		}
		function myPos(pos){
	    myLatlng = {lat: pos.coords.latitude, lng: pos.coords.longitude};
			initMap();
		}
		function errPos(err){
			console.log(err);
			switch(err.code) {
				default:
					myLatlng = {lat: -6.597853, lng: 106.797682};
					initMap();
		      break;
		  }
		}

		function initMap() {
			//inisialisasi map awal dan nilai awal variabel
			map = new google.maps.Map(document.getElementById('myMap'), {
				center: myLatlng,
				zoom: 15,
				clickableIcons: false,
				fullscreenControl: false,
				mapTypeId: 'roadmap'
			});

			infoHere = new google.maps.InfoWindow();
			circle = new google.maps.Circle;
			geocoder = new google.maps.Geocoder;
			directionsService = new google.maps.DirectionsService;
	    directionsDisplay = new google.maps.DirectionsRenderer({
				suppressMarkers: true,
				preserveViewport: true,
				polylineOptions: {
	      	strokeColor: "red"
	    	}
			});
			service = new google.maps.places.PlacesService(map);
			var input = document.getElementById('pac-input');
		  var searchBox = new google.maps.places.SearchBox(input);
			map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

			//nambahin listener buat action di map nya
			google.maps.event.addListener(map, 'click', function (event) {
				markers.forEach(function(marker) {
					marker.setMap(null);
				});
				markers = [];
				myLatlng = event.latLng;
				runQuery();
			});

			map.addListener('bounds_changed', function() {
				 searchBox.setBounds(map.getBounds());
			});

	    searchBox.addListener('places_changed', function() {
	      var places = searchBox.getPlaces();
	      if (places.length == 0) {
	        return;
	      }

	      var bounds = new google.maps.LatLngBounds();
	      places.forEach(function(place) {
					(place.geometry.viewport)?bounds.union(place.geometry.viewport):bounds.extend(place.geometry.location);
	      });
	      map.fitBounds(bounds);
				map.setZoom(15);
	    });
		}

		function runQuery() {
			directionsDisplay.setMap(null);
			infoHere.close();

			geocoder.geocode({'location': myLatlng}, function(results, status) {
				if(status === 'OK'){
					if(results[0]){
						map.setZoom(map.getZoom());

						var marker = new google.maps.Marker({
							icon: homeIcon,
							position: myLatlng,
							map: map
						});

						google.maps.event.addListener(marker,'click', (function(marker){
								return function() {
									directionsDisplay.setMap(null);
									infoHere.close();

									nearby.forEach(function(marker) {
										marker.setMap(null);
									});
									nearby.forEach(function(marker) {
										marker.setMap(map);
									});
								};
						})(marker));

						markers.push(marker);
						service.getDetails({ placeId: results[0].place_id }, function(place, status) {
							if(status === google.maps.places.PlacesServiceStatus.OK) {
								$('#alamatRumah').html('<b>'+place.name);
								$('#alamatJalan').html(place.formatted_address);
								myLocation = place;

								circle.setMap(null);
								circle = new google.maps.Circle({
									map: map,
									center: myLatlng,
									radius: radius,
									strokeColor: '#07A8BD',
									strokeOpacity: 0.8,
									strokeWeight: 2,
									fillColor: '#07A8BD',
									fillOpacity: 0.1,
									clickable: false
								});

								service.nearbySearch({
									location: myLatlng,
									radius: radius-2000,
									keyword: keyword,
									type: ['market','pasar']
								}, callback);
							}
						});
					}
				}
			});
		}

		function callback(results, status) {
			nearby.forEach(function(marker) {
				marker.setMap(null);
			});
			nearby = [];
			nearest = [];

			$('#rekomendasi').empty();

			if(status == google.maps.places.PlacesServiceStatus.OK) {
				for(var i = 0; i < results.length; i++) {
					var infowindow = new google.maps.InfoWindow();
					var marker = new google.maps.Marker({
						icon: foundIcon,
						title: results[i].name,
						map: map,
						position: results[i].geometry.location
					});

					var content = results[i].name;

					google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
			        return function() {
			           infowindow.setContent(content);
			           infowindow.open(map,marker);
			        };
			    })(marker,content,infowindow));

					nearby.push(marker);

					results[i].distance = euclidGeom(myLatlng,results[i].geometry.location);
					nearest.push(results[i]);
		    }
		  }

			nearest.sort(function(a, b){return a.distance-b.distance});
			$.each( nearest, function( key, value ) {
			  $('#rekomendasi').append("<li style='width:100%; vertical-align: middle;'><a id='"+key+"' onClick='liClick(this.id);' class='col-md-10'>"+value.name+"</a><i id='"+key+"' style='margin:0;' class='btn btn-default fa fa-external-link fa-lg col-md-2' onClick='openDetail(this.id)'></i></li>");
			});

		}

		function euclidGeom(src,dest) {
			return Math.sqrt((Math.pow(src.lat()-dest.lat(),2))+Math.pow(src.lng()-dest.lng(),2));
		}

		function liClick(val) {
			var markHere;

			nearby.forEach(function(marker) {
				if(marker.position == nearest[val].geometry.location){
					marker.setMap(map);
					markHere = marker;
				} else marker.setMap(null);
			});

			directionsDisplay.setMap(map);

			directionsService.route({
				origin: myLocation.geometry.location,
	      destination: nearest[val].geometry.location,
	      travelMode: 'DRIVING'
			},function(response, status) {
			    if (status === 'OK') {
						infoHere.close();

						var content = '<center><b>'+nearest[val].name+'</b></center><hr style="padding:2px; margin:10px;"></hr>'+
						'Estimasi Perjalanan Darat<br>'+
						'Jarak Tempuh: '+response.routes[0].legs[0].distance.value/1000 +" Km<br>"+
						'Waktu Tempuh: '+response.routes[0].legs[0].duration.text;

						infoHere.setContent(content);

						directionsDisplay.setDirections(response);
						infoHere.open(map,markHere);
			    } else {
			      window.alert('Directions request failed due to ' + status);
			    }
				});
		}

		function openDetail(val) {
			$('#detailNama').html(nearest[val].name);
			$('#detailAlamat').html(nearest[val].vicinity);
			$('#detailText').empty();
			$('#gallery').empty();
			var it = 0;

			var content = nearest[val].distance;

			$('#detailText').html();

			service.getDetails({ placeId: nearest[val].place_id }, function(place, status) {
				if(status === google.maps.places.PlacesServiceStatus.OK) {
					if(!place.photos){
						$('#gallery').append('<div class="item active"><center><img src= "https://mosaikweb.com/wp-content/plugins/lightbox/images/No-image-found.jpg" ></center></div>');

						return;
					}

					place.photos.forEach(function(photo) {
						var photo = photo.getUrl({'maxHeight': 300});

						if(it==0) $('#gallery').append('<div class="item active"><center><img src='+photo+'></center></div>');
						else $('#gallery').append('<div class="item text-center"><center><img src='+photo+'></center></div>');

						it++;
					});
				}
			});

			$('#detail').modal('show');
		}
	</script>
</body>
</html>
