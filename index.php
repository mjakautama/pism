<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<head> 
	<title>Market Hunter</title> 
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="assets/css/admin.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">  
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">  
	<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="assets/js/bootstrap-slider.min.js"></script>
	<link rel="stylesheet" href="assets/css/spritecss.css" type="text/css" > 
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

<body style="background:#013243;">
	<div class="container-fluid" style="height:inherit;">
		<div class="row" style="height:inherit;">
			<div class="col-lg-3" style="height:inherit;">
				<div class="nav navbar-nav side-nav">
					<div id="container">
					<div class="text-left row">
						<div class="col-md-11 pull-left text-center">
							<img src="assets/img/logo.jpg" height="120px">
							<h4>Market Hunter</h4>
						</div>
					</div>
					<hr></hr> 

					<div class="text-left row"> 
						<div id="sidebar">
							<div class="sidebar-wrapper">
					          	<div class="panel panel-default" id="features">
					          		<div class="panel-heading">
						              	<h3 class="panel-title">Lokasi Anda
						              	<button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="cus-user_suit"></i></button></h3>
							        </div>  
							        <div class="col-md-1 pull-left">&nbsp;</div>
							        <div class="col-md-10">
							        	<br>
										<b id="alamatRumah"></b>
									</div>
									<div class="col-md-11 pull-right">
										<p id="alamatJalan"></p>
										<br>
									</div>
					          	</div>
					        </div>
					    </div>
					</div>
 

					<div class="text-left row"> 
						<div id="sidebar">
						<div class="sidebar-wrapper">
				          <div class="panel panel-default" id="features">

						<div class="panel-heading">
				              <h3 class="panel-title">Jenis Market Place yang Diinginkan
				              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="cus-house"></i></button></h3>
				        </div>  
						<div class="col-md-1 pull-left">&nbsp;</div>
						<div class="col-md-3 pull-left text-center">
							<br>
							<input type="radio" class="form-inline" name="tingkat" value="[Pasar]" checked><br>Pasar
						</div>
						<div class="col-md-3 pull-left text-center">
							<br>
							<input type="radio" class="form-inline" name="tingkat" value="[Alfamart]"><br>Alfamart
						</div>
						<div class="col-md-3 pull-left text-center">
							<br>
							<input type="radio" class="form-inline" name="tingkat" value="[Indomaret]"><br>Indomaret
						</div>
						<div class="col-md-5 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Mall]"><br>Mall
						</div>
						<div class="col-md-7 pull-left text-center">
							<input type="radio" class="form-inline" name="tingkat" value="[Circle K]"><br>Circle K
						</div></div>
					</div></div>
					</div>

					<hr></hr>

					<div class="text-left row"> 
						<div id="sidebar">
						<div class="sidebar-wrapper">
				          <div class="panel panel-default" id="features">
							<div class="panel-heading">
					              <h3 class="panel-title">Jarak Radius Pencarian
					              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="cus-world"></i></button></h3>
					        </div> 
							<div class="col-md-1 pull-left">&nbsp;</div>
							<div class="col-md-8 pull-left">
								<br>
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
								<br>
								<p id="radNum" class="text-left"></p>
							</div>
						</div></div>
					</div>
					</div>

					<hr></hr>

					<div class="text-left row"> 
						<div id="sidebar">
				        <div class="sidebar-wrapper">
				          <div class="panel panel-default" id="features">
				            <div class="panel-heading">
				              <h3 class="panel-title">Daftar Market Place
				              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="cus-zoom"></i></button></h3>
				            </div> 
				            <div class="sidebar-table">
				              <table class="table table-hover" id="feature-list">
				                <thead class="hidden"> 
		                   			<ul id="rekomendasi" class="nav navbar-nav"></ul> 
				                </thead>
				                <tbody class="list"></tbody>
				              </table>
				            </div>
				          </div>
				        </div>
				      </div> 
				    </div>
					</div>
				</div>
			</div>

      <div class="col-lg-9" style="height:inherit;">
		<input id="pac-input" class="controls" type="text" placeholder="Tentukan Lokasi Anda...">
		<div id="myMap" style="height:100%;margin-left:-1%; margin-right:-1%;"></div>
      </div>

		<div class="modal fade col-lg-6 col-lg-offset-3" id="detail">
	    <div class="modal-content">
	      <div class="row">
	        <div class="col-lg-12">
	          <div class="modal-body">
	            <h2 id="detailNama" align="center"></h2>
					<h4 id="detailAlamat"></h2>
					<br>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<div id="gallery" class="carousel-inner">
							<div class="item active"> </div>
						</div>
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Sebelumnya</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Selanjutnya</span>
						</a>
					</div> <br>
					<div id="detailText" class="text-left"></div> <br>
	            <a data-dismiss="modal" class="btn btn-danger pull-right">Tutup</a> <h3>&nbsp;</h3>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
    </div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG1wy8E-WZuD5kvCYMODyh9fZ2RConDkQ&region=ID&language=id&libraries=places&callback=getLoc" async defer></script>
	<script type="text/javascript" src="assets/js/map.js"></script>
</body>
</html>
