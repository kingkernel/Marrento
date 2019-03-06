<?php
class index {
	public $page;
	public function __construct(){
		$this->page = new page_site;
			$interface = new bootstrapInterface;

		$this->page->headersinclude = includeHeader([$interface->cdnCss, 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js',$interface->cdnJs]);
		$this->page->jsendbody = '<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script><script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $(\'#dismiss, .overlay\').on(\'click\', function () {
                $(\'#sidebar\').removeClass(\'active\');
                $(\'.overlay\').removeClass(\'active\');
            });

            $(\'#sidebarCollapse\').on(\'click\', function () {
                $(\'#sidebar\').addClass(\'active\');
                $(\'.overlay\').addClass(\'active\');
                $(\'.collapse.in\').toggleClass(\'in\');
                $(\'a[aria-expanded=true]\').attr(\'aria-expanded\', \'false\');
            });
        });
    </script>';
		return $this;
	}
	public function index(){
$menu = new sideMenuOcult;
$this->page->headersinclude .= '<style>'.$menu->css.'</style>';

$this->page->bodycontent = $menu->html();
        $this->page->scriptsendpage = 'var nv = $("#navview1").data("navview");';
		$this->page->render();
	}
}
/*
            [language] => pt-br
            [titlepage] => 
            [headersinclude] => <link href="../public/css/bootstrap.min.css" rel="stylesheet"><link href="../public/css/bootstrap-theme.min.css" rel="stylesheet"><script src="../public/js/jquery-1.11.1.min.js"></script><script src="../public/js/bootstrap.min.js"></script><style type="text/css">.label,.glyphicon, .fa{ margin-right:5px; }</style>
            [bodyextras] => 
            [bodycontent] => 
            [outrosmeta] => 
            [scriptsendpage] => 
            [jsendbody] => 
            [posScript] => 
*/
?>
