<?php  
class viewModel{
	
	public function headerView($pagename='') {
		include 'views/header.inc';
	}	
	public function regionListView($rows) {
		include 'views/body.php';
	}
	public function detailView($pagename='', $data=array()) {
		include $pagename;
//		include 'views/regionDetails.php';
	}
	public function footerView() {
		include 'views/footer.inc';
	}
	public function formView() {
		include 'views/loginForm.php';
	}
	public function show($file) {
		$filePath = 'views/'.$file;
		
		if (file_exists($filePath)) {
			include $filePath;
		}	
	}
}

?>