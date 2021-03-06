
<html>
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
		<link href="css/whypa.css" rel="stylesheet" type="text/css">
		<script src="js/index.js"></script>
	</head>
<body>
<div id="fb-root"></div>
<script>
(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	
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

	<!--<img id="image-format" class="image-responsive" src="./images/header_image.jpg">-->
			<div id="tag" class="header">
				<div class="container">
					<div class="row">    
						<div class="col-xs-8 col-xs-offset-2">
						<label> Search your plots </label>
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
<?php
		   session_start();
		   $dev_id= null;
		   $resultJSON=array();
		   $slicers = array();
		   $approval=null;
		   $resultJSON = json_decode(file_get_contents('json/output.json'),true);
		   if($resultJSON != null)
		   { 
			$rowCount = $_SESSION['rowcount'];
			foreach($resultJSON as $developerData)
		    {		
				while (list($key, $value) = each($developerData)) 
				 {
				  if($key == "NR")
				  {
					  echo '<div id="no-search">';
					  echo '<img src="images/no-search-image.png">';
					  echo '<h3>No value is found for the search </h3>';
					  echo '</div>' ;
				  }
				 }
			}
			   if($rowCount > 0)
			   {
				   echo '<h3>'.$rowCount.' results found for the search Keyword</h3>';
				   foreach($resultJSON as $developerData)
				   {
					   echo '<div id="panel-format" class="panel panel-default">';
					   echo '<div class="panel-body">';
					   echo'<div id="searchResults">';
					   echo '<div id="image"><a href="AdditionalDetails.php"><img src="./images/daksha.jpg"></a></div>';
					   echo '<div id="developerdetails">';
					   echo '<table class="table">';
						
						while (list($key, $value) = each($developerData)) 
						 {
						  if($key == "dev_name")
						   {
							echo  '<tr><td><label> Project Name</td><td><label>'.$value.'</label></td></tr>';
						   }
						   if($key == "builder_name")
						   {				   
							echo  '<tr><td><label> Builder Name</td><td><label>'.$value.'</label></td></tr>';
						   }
						   if($key == "progress")
						   {				   
							echo  '<tr><td><label> Progress</td><td><label>'.$value.'</label></td></tr>';
						   }
						   if($key == "price")
						   {				   
							echo  '<tr><td><label> Price</td><td><label>'.$value.'</label></td></tr>';
						   }
						   if($key == "locality")
						   {				   
							echo  '<tr><td><label> Locality</td><td><label>'.$value.'</label></td></tr>';
						   }
						   if($key == "isApproved")
						   {
							   $approval = $value;
						   }
						   if($key == "NR")
						   {
							 	echo '<h3>Sorry folks. No data available for the search</h3>';  
						   }
						   if($key == "dev_id")
						   {
							   $dev_id = $value;
						   }
						 }
						 if($approval == 1)
						 {
						  echo '<td><label>MUDA Approval </label></td><td><label>Approved </label>';
						 }
						 else
						 {
						 echo '<td><label>MUDA Approval </label></td><td><label>Not Approved </label>';	 
						 }  
							 
					   echo '</table>';
					   echo '</div>';	
					   echo '<div id="personalDetails">';
					   echo '<button class="btn btn-primary" onclick=document.location.href="details.php?dev='.$dev_id.'">More Details</button>';
					   echo '</div>';
					   echo'</div>';
					   echo'</div>';
					   echo'</div>';
					}
			   }
			    $fp = fopen("json/output.json", "r+");
			    ftruncate($fp, 0);
			    fclose($fp);
		    }	
           		   
	   ?>
			<div id="about-us">	   
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1 class="h1"> About the Team 
									<small>Wizards with the wands</small>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
				</div>
			</div>

			<div id="contact-details">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1 class="h1"> Contact us 
									<small>Feel free to contact us</small>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="well well-sm">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name"> Name</label>
												<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
											</div>
											<div class="form-group">
												<label for="email"> Email Address</label>
												<div class="input-group">
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-envelope"></span>
													</span>
													<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
											<div class="form-group">
												<label for="subject"> Subject</label>
												<select id="subject" name="subject" class="form-control" required="required">
													<option value="service">General Customer Service</option>
													<option value="suggestions">Suggestions</option>
													<option value="product">Product Support</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name"> Message</label>
												<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<form>
								<legend>
									<span class="glyphicon glyphicon-globe"></span> Our office
								</legend>
								<address>
									<strong>
										<h3>Plotsaround.com Head quarters.</h3>
									</strong>
									<br>No.4621 Sita Nilaya,
										<br> Vijayanagar 2nd Stage,
										<br> Near K.D Circle, Mysore - 570017
										<br> Phone: +91 8105490526
										<br> E-mail: 
										<a href="mailto:#">sales@plotsaround.com</a>
								</address>
							</form>
						</div>
					</div>
				</div>
			</div>  
			
			<div id="why">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1 class="h1"> Why Plotsaround? 
									<small>Feel free to contact us</small>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="tile purple">
							<h3 class="title">Purple Tile</h3>
							<p>Hello Purple, this is a colored tile.</p>
						  </div>
						</div>
						<div class="col-sm-4">
						  <div class="tile red">
							<h3 class="title">Red Tile</h3>
							<p>Hello Red, this is a colored tile.</p>
						  </div>
						</div>
						<div class="col-sm-4">
						  <div class="tile orange">
							<h3 class="title">Orange Tile</h3>
							<p>Hello Orange, this is a colored tile.</p>
						  </div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-sm-4">
						  <div class="tile green">
							<h3 class="title">Green Tile</h3>
							<p>Hello Green, this is a colored tile.</p>
						  </div>
						</div>
						<div class="col-sm-4">
						  <div class="tile blue">
							<h3 class="title">Blue Tile</h3>
							<p>Hello Blue, this is a colored tile.</p>
						  </div>
						</div>  
						<div class="col-sm-4">
						  <div class="tile blue">
							<h3 class="title">Blue Tile</h3>
							<p>Hello Blue, this is a colored tile.</p>
						  </div>
						</div>
					  </div>
				</div>
			</div>
		<div id="dummy">
				<div class="jumbotron jumbotron-sm">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-lg-12">
								<h1 class="h1"> Contact us 
									<small>Feel free to contact us</small>
								</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="well well-sm">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name"> Name</label>
												<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
											</div>
											<div class="form-group">
												<label for="email"> Email Address</label>
												<div class="input-group">
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-envelope"></span>
													</span>
													<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
											<div class="form-group">
												<label for="subject"> Subject</label>
												<select id="subject" name="subject" class="form-control" required="required">
													<option value="service">General Customer Service</option>
													<option value="suggestions">Suggestions</option>
													<option value="product">Product Support</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name"> Message</label>
												<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<form>
								<legend>
									<span class="glyphicon glyphicon-globe"></span> Our office
								</legend>
								<address>
									<strong>
										<h3>Plotsaround.com Head quarters.</h3>
									</strong>
									<br>No.4621 Sita Nilaya,
										<br> Vijayanagar 2nd Stage,
										<br> Near K.D Circle, Mysore - 570017
										<br> Phone: +91 8105490526
										<br> E-mail: 
										<a href="mailto:#">sales@plotsaround.com</a>
								</address>
							</form>
						</div>
					</div>
				</div>
			</div>  		
</div>
</div>
</body>
</html>