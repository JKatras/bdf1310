<?php  
class viewModel{
	
	public function headerView($pagename='') {
		include 'views/header.inc';
	}	
	public function regionView($rows) {
		include 'views/body.php';
	}
	public function detailView($rows) {
		include 'views/regionDetail.php';
	}
	public function footerView() {
		include 'views/footer.inc';
	}
}

?>