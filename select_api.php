<?php
	include("connect.php");
	$qry="select *from product";
	$res=mysqli_query($con,$qry);
	$products=array();
	$products["response"]=array();
	while($row=mysqli_fetch_array($res)){
		$product=array("id"=>$row[0],"title"=>$row[1],"image"=>$row[2],"description"=>$row[3]);
		array_push($products["response"],$product);
	}	
	//print_r($products);
	echo json_encode($products);
?>