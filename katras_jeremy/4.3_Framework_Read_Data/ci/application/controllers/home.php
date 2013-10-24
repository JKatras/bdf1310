<?php  
//include('models/viewModel.php');
//include('models/usersModel.php');
class Home extends CI_controller {
	
	//$pagename = 'index';
	
	//$view = new viewModel();
	//$user = new usersModel();
	public function __construct() {
		parent::__construct();
		$this->load->model('usersModel');
	}
	
	public function index() {
		
		$this->load->view('header');
	//	$view->getView("views/header.inc");
		
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){
				$data['regionId'] = $this->usersModel->getRegionList();
				$this->load->view('regionBody', $data);
			}
			if($_GET["action"]=="details"){
	//			$result = $user->getCharList($_GET["regionId"]);
	//			$view->getView("views/charByRegion.php", $result);
				$result['regionId'] = $this->usersModel->getCharList;
				$this->load->view('charByRegion', $result);
			}
			if($_GET["action"]=="login"){
			//	$view->getView("views/loginForm.php");
				header("location: userMain.php");
			}
		}
			else {
				$data['regionId'] = $this->usersModel->getRegionList();
				$this->load->view('regionBody', $data);
		}
		$this->load->view('footer');
	//	$view->getView("views/footer.inc");
	}
}
?>