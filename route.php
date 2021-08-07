<?php  

require_once "Controller/CustomerController.php";

$controller = '';
if (isset($_GET["controller"])) {
	$controller = $_GET["controller"];
}

$action = isset($_GET["action"]) ? $_GET["action"] : '';
	switch ($controller) {
		case '':

		case 'home':
			CustomerController::View();
			break;

		case 'customers':

			switch ($action) {
				case '':
					CustomerController::View();
					break;
				case 'create':
					CustomerController::Create();
					break;
				case 'createProcess':
					CustomerController::CreateProcess();
					break;
			}
			break;

		default:

			echo "Không có..............";
			break;
	}
?>