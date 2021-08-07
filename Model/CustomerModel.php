<?php  
require_once 'Model/DatabaseModel.php';
class CustomerModel extends DatabaseModel
{
	public $idCus;
	public $avatar;
	public $fullname;
	public $gender;
	public $phone;
	public $email;

	public function view(){
		$con = $this->open();

		$sql = "SELECT * FROM `customers`";

		$result = mysqli_query($con, $sql);

		$this->close($con);

		$CustomerArray = [];
		foreach($result as $each)
		{
			$cus = new CustomerModel();
			$cus->idCus = $each["idCus"];
			$cus->avatar = $each["avatar"];
			$cus->fullname = $each["fullname"];
			$cus->gender = $each["gender"];
			$cus->phone = $each["phone"];
			$cus->email = $each["email"];
			array_push($CustomerArray, $cus);	
		}
		return $CustomerArray;
	}

	public function CreateProcess()
	{
		$con = $this->open();

		$sql = "INSERT INTO customers(avatar, fullname, gender, phone, email) VALUES ('$this->avatar', '$this->fullname', $this->gender, $this->phone, '$this->email') ";

		mysqli_query($con, $sql);
		$this->close($con);
	}

	// public function getById($id){
	// 	$con = $this->open();

	// 	$sql = "SELECT * FROM `view_student` WHERE idStudent = $id";

	// 	$result = mysqli_query($con, $sql);

	// 	$this->close($con);
		
	// 	$item = mysqli_fetch_assoc($result);
	// 	$student = new StudentModel();
	// 	$student->idClass = $item["idClass"];
	// 	$student->nameClass = $item["nameClass"];
	// 	$student->idStudent = $item["idStudent"];
	// 	$student->nameStudent = $item["nameStudent"];
	// 	$student->gender = $item["gender"];
	// 	return $student;
		
	// }
	
}
	
?>