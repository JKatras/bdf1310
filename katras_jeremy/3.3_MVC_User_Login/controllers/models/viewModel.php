<?php  
class viewModel{
	
	public function regionListView($rows) {
		include 'views/body.php';
	}

	public function show($file='', $data=array()) {
		$filePath = 'views/'.$file;
		
		if (file_exists($filePath)) {
			include $filePath;
		}	
	}
	
	public function loginView() {
		include 'views/authenticate.php';
	}
}

?>