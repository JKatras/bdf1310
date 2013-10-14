<?php  
class viewModel{
	
	public function regionListView($rows) {
		include 'views/body.php';
	}
//	public function detailView($pagename='', $data=array()) {
//		include $pagename;
//	}

	public function show($file='', $data=array()) {
		$filePath = 'views/'.$file;
		
		if (file_exists($filePath)) {
			include $filePath;
		}	
	}
}

?>