<?php
   session_start();
   $searchKey = $_POST['searchDb'];
   $price = $_POST['price'];
   $locality = $_POST['locality'];
   $file = fopen("../json/output.json", "w") or die("Unable to open file!");
   $resultRows = array();   
   
   $server="localhost";
   $username ="root";
   $password="arun";
   $database="plots";
   echo $searchKey;
   echo $price;
   echo $locality;
   $sql = null;
   $conn = mysqli_connect($server,$username,$password,$database);

   if(($searchKey != null || $searchKey!=""))
   {
	  if($price == "0" && $locality!="0")
	  {
		echo 'search with key and locality'; 
	  $sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where dev_name like '%$searchKey%' and locality='$locality";
	  
	  }		
      else if($locality == "0" && $price!= "0")
      {
	    echo 'search with key and price';
		list($low,$high) = preg_split('[-]', $price);	
		$sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where dev_name like '%$searchKey%' and price between $low and $high";
	  }	
      else
      {
		echo 'search with key';  
		$sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where dev_name like '%$searchKey%'" ;
	  }		  
   }
   else
   {
      if($price == "0" && $locality != "0")
	  {
		echo 'search with locality';  
	    $sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where locality='$locality'" ;
	  }		
      else if($locality == "0" && $price != "0")
      {
	    echo 'search with price';
		list($low,$high) = preg_split('[-]', $price);
		
		$sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where price between $low and $high	" ;
	  }	
	  else if($price =="0" && $locality =="0")
      {
		echo 'Cannot search all values empty'; 
	  }
      else
      {
		echo 'search with only locality and price';
		list($low,$high) = preg_split('[-]', $price);	
		$sql = "select image,dev_id,dev_name,builder_name,progress,price,locality,isApproved from developer where price between $low and $high	and locality='$locality'" ;
	  } 
   }
	$result = mysqli_query($conn,$sql);
	$_SESSION['rowcount']=mysqli_num_rows($result);
	echo "Row count from the database ::::".$_SESSION['rowcount'];
	if(mysqli_num_rows($result) > 0)
	  {		  
	   while($row = mysqli_fetch_assoc($result)) 
		{
		  $dev_id =$row['dev_id'];	
		  $devname=$row['dev_name'];
		  $buildername=$row['builder_name'];
		  $progress=$row['progress'];
		  $approved=$row['isApproved'];
		  $price=$row['price'];
		  $locality=$row['locality'];
		  $resultRows[] = array('dev_id'=>$dev_id,'dev_name'=> $devname, 'builder_name'=> $buildername,'progress'=>$progress,'price'=>$price,'locality'=>$locality,'isApproved'=>$approved);
		}
		$response['resultRows'] = $resultRows;
		$json_file=json_encode($resultRows);
		fwrite($file,$json_file);
		header('Location:../index.php');
	  }
	 else
	 {
		 echo 'Inside else';
		 $resultRows[]=array('NR'=>"No rows found for the search Query.");
		 $response['resultRows']=$resultRows;
		 $json_file=json_encode($resultRows);
         fwrite($file,$json_file);
		 header('Location:../index.php');
	 }
        
?> 
