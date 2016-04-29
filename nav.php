
	<head>
		<title> Plotsaround.com | Search and Buy plots in Mysore</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<link rel="shortcut icon" type="image/png" href="images/favicon-pa.png"/>
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
		<link href="css/index.css" rel="stylesheet" type="text/css">
		<script src="js/index.js"></script>
	</head>
<div class="container-fluid">	
			 
			<nav id="nav-format" class="navbar navbar-default">
				<div  id="logo-format" class="navbar-header">
				  <a class="navbar-brand" href="index.php"><img src="./images/logo.png"></a>
				</div>
				<div id="top-bar-format">
					<div>
						<ul class="nav navbar-nav">
						  <li><a id="indexpage" href="index.php">Home</a></li>
						  <li><a id="aboutuspage"href="index.php#about-us">About us</a></li>
						  <li><a href="index.php#contact-details">Contact us</a></li>
						  <li><a href="index.php#why">Why Plotsaround?</a></li>
						  <li><div id="whats-app"><img src="images/wa-pa.png"><label>89515-23243</label></div></li>
						</ul>
						 <div id="fb-like-share-button" class="fb-like" data-href="https://www.facebook.com/plotsaroundmysore/?ref=aymt_homepage_panel" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
					</div>
				</div>
			</nav>
			
			<div id="tag" class="container">
			 <div class="row">    
				<div class="col-xs-8 col-xs-offset-2">
				<form name="searchForm" method="POST" action="./php/searchKeyword.php" onsubmit="return checkValue()">
					<input type="hidden" name="price" id="search_price" value="0">
					<input type="hidden" name="locality" id="search_locality" value="0">
					<div class="input-group">
							<div class="input-group-btn search-panel">
								<button id="price_button" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span id="search_concept">Price</span> <span class="caret"></span>
								</button>
								<ul id="dropdown-menu1" class="dropdown-menu" role="menu">
								  <li><b><label>Price per sqft </label></b></li>
								  <li><a onclick="$('#search_price').val('500-1000');"> 500 - 1000</a></li>
								  <li><a onclick="$('#search_price').val('1000 - 1500');"> 1000 - 1500</a></li>
								  <li><a onclick="$('#search_price').val('1500 - 2000');"> 1500 - 2000</a></li>
								</ul>
							</div>
							<div class="input-group-btn search-panel">
								<button id="locality_button" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span id="search_concept">Location</span> <span class="caret"></span>
								</button>
								<ul  id="dropdown-menu2" class="dropdown-menu" role="menu">
								  <li><input type="checkbox"> Mysore</li>
									  <li><a onclick="$('#search_locality').val('JP Nagar');">JP Nagar</a></li>
									  <li><a onclick="$('#search_locality').val('Hebbal');">Hebbal</a></li>
									  <li><a onclick="$('#search_locality').val('Bogadi Road');">Bogadi Road</a>
								</ul>
							</div>
						<input type="hidden" name="search_param" value="all" id="search_param">         
						<input name="searchDb" type="text" class="form-control" placeholder="Search developers for plots">						
     					<span class="input-group-btn">
							<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
					</form>
					<div id="example">
						<label>Example : Shobha developers</label>
				    </div>
				</div>
			</div>
	</div>
			
			
			
			
			
</div>
