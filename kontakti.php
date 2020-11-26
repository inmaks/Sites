<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style>	
			.thumbnail{
				text-align: center;
			}
			body{
				width: 100%;
				height: 100%;
				background-image: url("images/bk.jpg");
			}
			#top, table, h1, h2{
				color: white;
			}
		</style>
		<title>Sport</title>
	</head>
		<body>
			<div class="container">
				<div class="row">
					<div id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center">Sport</h1>
					</div>
				</div>
				<div class="row" id="content">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
						<div class="thumbnail">
							<div class="text-center">
								<div class="caption">
									<h3>Sport types</h3>
									<h5>Soccer</h5>
									<h5>Swimming</h5>
									<h5>Judo</h5>
									<p><a href="home.php" class="btn btn-primary" role="button">Home</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
						<div class="thumbnail">
							<div class="text-center">
								<div class="caption">
									<h3>Judo club "Satori" contacts</h3>
									<p><a href="kontakti.php" class="btn btn-primary" role="button">Contacts</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">  
						<div class="thumbnail">
							<div class="text-center">
								<div class="caption">
									<h3>Gallery</h3>
									<div class="dropdown">
									  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										Gallery
										<span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="galerija.php">Foto gallery</a></li>
										<li><a href="galeriav.php">Video gallery</a></li>
									  </ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="text-center">
							<h2>Judo club "Satori" contacts</h2>
						</div>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Info</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Aleksandrs</td>
									<td>Osnačs</td>
									<td>29222913</td>
								</tr>
								<tr>
									<td>Adress</td>
									<td>Rīga, Stabu iela 10/4, Latvija, LV-1010</td>
									<td></td>
									
								</tr>
								<tr>
									<td>Email</td>
									<td>satoridojosia@gmail.com</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 350px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.4436880123967!2d24.121154115855457!3d56.958331980892915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfcbf86273e1%3A0x755e530da84afc47!2sStabu%20iela%2010%2C%20Centra%20rajons%2C%20R%C4%ABga%2C%20LV-1010!5e0!3m2!1sru!2slv!4v1567514488478!5m2!1sru!2slv" width="100%" height="350" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
				</div>
				<div class="input-group input-group-lg">
					<span class="input-group-addon">SATORI DOJO</span>
					<input type="text" class="form-control" placeholder="Write your review">
				</div>
			</div>
		</body>
</html>