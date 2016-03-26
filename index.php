
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		<style>
	
		#tag 
		{
		   width: 100%;
		   position: absolute;
		   left: 0px;
		   top: 0px;
		   z-index: 1000;
		   color: #FFFFFF;
		   font-weight: bold;
		   padding-top:250px;
		}
		#image-format
		{
			width:100%;
		}
		#tag-line
		{
			font-family: 'Bitter', serif;
			font-size:
		}

		   #image, #developerdetails, #personalDetails {display: inline-block; *display: inline; zoom: 1; vertical-align: top; font-size: 12px;}
		   #image
		   {
			  border-radius: 0px;
			  border: 2px solid #000000; 
			  width:200px;
			  height:200px;		     
		   }
		   #developerdetails
		   {
			  width:900px;
			  padding-left:50px;
    		  border-radius: 0px;
			  font-size:20px;
		   }
		   #personalDetails
		   {
			  padding-left:50px;
			  padding-top:140px;
			  border-radius: 0px;
		   }
		   * {margin: 0; padding: 0;}	   

		
		</style>
		<script type="text/javascript">
		$( document ).ready(function() {
			$('#search_price').val("0");
			$('#search_locality').val("0");
		});
		 $(function(){

			$("#dropdown-menu1").on('click', 'li a', function(){
			  $("#price_button:first-child").text($(this).text());
			  $("#price_button:first-child").val($(this).text());
		   });
            
			$("#dropdown-menu2").on('click', 'li a', function(){
			  $("#locality_button:first-child").text($(this).text());
			  $("#locality_button:first-child").val($(this).text());
		   });
		});
	   function checkValue()
	   {
		   var searchForm = document.forms["searchForm"];
		   
		   var word = searchForm.elements["searchDb"].value;
		   var locality =searchForm.elements["search_locality"].value;
		   var price = searchForm.elements["search_price"].value;
		   
		   if(word=="" && locality == 0 && price == 0)
		   {
			 alert("Please give anyone of the search criteria"); 
             return false; 			 
		   }
		   else
		   {
			   return true;
		   }
		
		}
		</script>
		
	</head>

<div class="container-fluid">	
    <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#Contact-us">Contact us</a></li>
      <li><a href="#why">Why Plotsaround?</a></li>
    </ul>
 	</nav>
	
	<img id="image-format" class="image-responsive" src="./images/header_image.jpg">
	<div id="tag" class="header">
	    <h3 id="tag-line" align="center">Build your nest from here</h3>
		 <div class="container">
			 <div class="row">    
				<div class="col-xs-8 col-xs-offset-2">
					<form name="search-form" method="POST" action="./php/searchKeyword.php">
					<input type="hidden" name="price" id="search_price" value="0">
					<input type="hidden" name="locality" id="search_locality" value="0">
								
					<div class="input-group">
							<div class="input-group-btn search-panel">
								<button id="price_button" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span id="search_concept">Price</span> <span class="caret"></span>
								</button>
								<ul id="dropdown-menu1" class="dropdown-menu" role="menu">
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
								  <li><a onclick="$('#search_locality').val('JP Nagar');">JP Nagar</a></li>
								  <li><a onclick="$('#search_locality').val('Hebbal');">Hebbal</a></li>
								  <li><a onclick="$('#search_locality').val('Bogadi Road');">Bogadi Road</a></li>
								</ul>
							</div>
						<input type="hidden" name="search_param" value="all" id="search_param">         
						<input name="searchDb" type="text" class="form-control" name="x" placeholder="Search plots...">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
					</form>
				</div>
			</div>
	</div>
</div>	
<?php
		   session_start();
		   $resultJSON=array();
		   $slicers = array();
		   $approval=null;
		   $resultJSON = json_decode(file_get_contents('json/output.json'),true);
		   if($resultJSON != null)
		   { 
			   $rowCount = $_SESSION['rowcount'];
			   if($rowCount > 0)
			   {
				   echo '<h3>'.$rowCount.' results found for the search Keyword</h3>';
				   foreach($resultJSON as $developerData)
				   {
					   echo '<div class="panel panel-default">';
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
					   echo '<button class="btn btn-primary"> More details </button>';
					   echo '</div>';
					   echo'</div>';
					   echo'</div>';
					   echo'</div>';
					}
				
					//open file to write
					$fp = fopen("json/output.json", "r+");
					// clear content to 0 bits
					ftruncate($fp, 0);
					//close file
					fclose($fp);
			   }
		    }	
           		   
	   ?>  


</div>


</html>