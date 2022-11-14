<?php
			include 'connect.php';
			$id=$_REQUEST['id'];
			$qry="delete from product where id=".$id;
			$res=mysqli_query($con,$qry);
			$del=array();
		if($res!=0){
			$del['response'] = array('status'=>1,'msg' => 'data deleted successfully' );
		}else{
			$del['response'] = array('status'=>0,'msg' => 'cannot delete data' );			
		}
		echo json_encode($del);
?>