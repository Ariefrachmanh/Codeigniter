<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url()?>/home"><i class="glyphicon glyphicon-ok-sign"></i> Jago Ngoding</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url()?>/home">Home</a></li>
							<li class="active"><a href="<?php echo site_url()?>/about">About</a></li>
							<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Edit</a></li>
									<li><a href="#">Log out</a></li>								
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				
			
			<div class="jumbotron">
				<div class="container text-center">
					<h1 class=""><i class="glyphicon glyphicon-edit"></i> Biodata</h1>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img src="<?php echo base_url()?>asset/foto1.jpg" class="img-responsive img-rounded" alt="Image" width="204" height="236" align="right">
						</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead align="left">	
									<tr>
										<th>NAMA
											<td>Arief Rachman Hakim</td>
										</th>
									</tr>
									<tr>
										<th>NIM
											<td>1541180141</td>
										</th>
									</tr>
									<tr>
										<th>ALAMAT
											<td>Perum Citra Cengger Ayam Kav 56</td>
										</th>
									</tr>
									<tr>
										<th>NO HP
											<td>08523320426</td>
										</th>
									</tr>
									<tr>
										<th>HOBBY
											<td>Futsal, <i class="glyphicon glyphicon-music"></i> Main Gitar, <i class="glyphicon glyphicon-camera"></i>Fotografi, <i class="glyphicon glyphicon-"></i>Nge-Pes</td>
										</th>
									</tr>
								</thead>								
							</table>
						</div>
					</div>
					
				</div>
			</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>