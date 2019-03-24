<?php
auth::checkAuth();
class opencalled{
	public function __construct(){
		if (!isset($_POST["prob"])||!isset($_POST["userid"])||!isset($_POST["descri"])){
			header("Location: /");
			echo "<script>document.reload();</script>";
		} else {
			$page = new page;
			$this->page = $page;
			return $this->page;
		}
	}
	public function index(){
		$sql = 'call sp_add_teccalled('.$_POST["prob"].', '.$_POST["userid"].', "'.$_POST["descri"].'")';
		$query = fastquery($sql);

		$panel = new rowAlert;
		$this->page->scriptsendpage = 'function reloadPage(){location.href="/";document.reload()}; window.setTimeout("reloadPage()", 6000);';
    	$this->page->bodycontent = $panel->html();
  		$this->page->render();
	}
}
?>