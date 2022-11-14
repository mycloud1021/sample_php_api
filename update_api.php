<?php
			include 'connect.php';
			global $res;
			$id=$_REQUEST['id'];
			$title=$_REQUEST['title'];
			$description=$_REQUEST['description'];
			$imgNm="images/".$_FILES['image']['name'];
			if(move_uploaded_file($_FILES['image']['tmp_name'],$imgNm)){
					$qry="update product set title='".$title."',image='".$imgNm."',description='".$description."' where id=".$id;
				$res=mysqli_query($con,$qry);
			}
			else{
				$qry="update product set title='".$title."',description='".$description."' where id=".$id;
				$res=mysqli_query($con,$qry);
			}
		$ins=array();
		if($res!=0){
			$ins['response'] = array('status'=>1,'msg' => 'data updated successfully' );
		}else{
			$ins['response'] = array('status'=>0,'msg' => 'cannot update data' );			
		}
		echo json_encode($ins);
?>