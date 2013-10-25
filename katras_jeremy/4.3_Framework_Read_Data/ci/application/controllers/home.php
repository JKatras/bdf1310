<?php  

class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usersModel');
	}
	
	public function index() {
		
		$this->load->view('header');
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){
				$data['regionId'] = $this->usersModel->getRegionList();
				$this->load->view('regionBody', $data);
			}
			if($_GET["action"]=="details"){
				$result = $this->usersModel->getCharList($_GET['regionId']);
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
		
	}
}
?>