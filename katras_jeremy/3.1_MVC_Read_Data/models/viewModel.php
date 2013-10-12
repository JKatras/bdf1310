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
}

?>