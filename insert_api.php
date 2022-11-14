<?php
			include 'connect.php';
			$title=$_POST['title'];
			$imgNm="images/".$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],$imgNm);
			//$image=$_POST['image'];
			$description=$_POST['description'];
		$qry="insert into product(title,image,description)values('".$title."','".$imgNm."','".$description."')";
		$res=mysqli_query($con,$qry);
		$ins=array();
		if($res!=0){
			$ins['response'] = array('status'=>1,'msg' => 'data inserted successfully' );
		}else{
			$ins['response'] = array('status'=>0,'msg' => 'cannot insert data' );			
		}
		echo json_encode($ins);
?>