<?php  

class DatabaseModel
{
	public function open(){
		$con = mysqli_connect("localhost","root","","php2");
		return $con;
	} 

	public function close($con){
		mysqli_close($con);
	}
}
?>