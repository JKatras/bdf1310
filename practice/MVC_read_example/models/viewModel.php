<?php  
class viewModel{
	public function _construct() {
	}
	
	public function getView($pagename='', $data=array()) {
		include $pagename;
	}
}

?>