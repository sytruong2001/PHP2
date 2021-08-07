<?php  
require_once 'Model/CustomerModel.php';
class CustomerController
{
	static function View()
	{
		//Lấy dữ liệu
		$customer = new CustomerModel();
		$result = $customer->view();
		//Hiển thị dữ liệu
		require_once "View/index.php";
	}

	static function Create()
	{	
		require_once "View/create.php";
	}

	static function CreateProcess()
	{	
        $image = $_FILES["avatar"];
		
		$avatar = $image["name"];

		$lane = "../image/" . $avatar;

		move_uploaded_file($image["tmp_name"], $lane);

		$fullname = $_POST["fullname"];
		$gender = $_POST["gender"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];

		$customer = new CustomertModel();
		$customer->avatar = $avatar;
		$customer->fullname = $fullname;
		$customer->gender = $gender;
		$customer->phone = $phone;
		$customer->email = $email;
		$customer->CreateProcess();

		header("Location: ?controller=customers");
	}
}

?>