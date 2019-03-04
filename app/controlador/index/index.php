<?php
class index {
	public $page;
	public function __construct(){
		$this->page = new page_site;
			$metro = new metroInterface;
		$this->page->headersinclude = $metro->cdn;
		$this->page->jsendbody = '<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script href="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>';
		return $this;
	}
	public function index(){
		$this->page->bodycontent = '<div class="container-fluid"><div class="example p-0" style="height: 500px;">
                    <div data-role="navview" data-compact="md" data-expanded="lg" data-toggle="#pane-toggle" class="navview compact-md expanded-lg" data-role-navview="true">
                        <nav class="navview-pane">
                            <button class="pull-button">
                                <span class="mif-menu"></span>
                            </button>

                            <div class="suggest-box"><div class="input"><input type="text" data-role="input" data-clear-button="false" data-search-button="true" class="" data-role-input="true"><div class="button-group"><button class="button input-search-button" tabindex="-1" type="submit"><span class="default-icon-search"></span></button></div></div>
                                
                                <button class="holder">
                                    <span class="mif-search"></span>
                                </button>
                            </div>

                            <ul class="navview-menu" style="height: calc(100% - 152px);">
                                <li>
                                    <a href="#">
                                        <span class="icon"><span class="mif-home"></span></span>
                                        <span class="caption">Home</span>
                                    </a>
                                </li>

                                <li class="item-separator"></li>

                                <li class="item-header">Main pages</li>

                                <li>
                                    <a href="#">
                                        <span class="icon"><span class="mif-apps"></span></span>
                                        <span class="caption">Apps</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">
                                        <span class="icon"><span class="mif-gamepad"></span></span>
                                        <span class="caption">Games</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <span class="icon"><span class="mif-music"></span></span>
                                        <span class="caption">Music</span>
                                    </a>
                                    <ul class="navview-menu" data-role="dropdown" style="height: calc(100% - 152px); display: none;" data-role-dropdown="true">
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="mif-gamepad"></span></span>
                                                <span class="caption">Games</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="mif-film"></span></span>
                                                <span class="caption">Movies</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled">
                                    <a href="#">
                                        <span class="icon"><span class="mif-images"></span></span>
                                        <span class="caption">Images</span>
                                    </a>
                                </li>

                                <li class="item-separator"></li>

                                <li>
                                    <a href="#">
                                        <span class="icon"><span class="mif-folder"></span></span>
                                        <span class="caption">Documents</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="navview-content pl-4-md pr-4-md">
                            <h1>
                                <button id="pane-toggle" class="button square d-none-md"><span class="mif-menu"></span></button>
                                What is?
                            </h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p><div class="panel" id="23e9c485-ab2f-45d4-a49e-515a616fbd46" style="width: 240px;"><div data-role="panel" data-title-caption="Panel title" data-title-icon="<span class="mif-apps"></span>" data-width="240" data-collapsible="true" data-draggable="true" class="panel-content" data-role-panel="true">
                                Raptus capios ducunt ad genetrix. Joy doesn’t beautifully respect any believer — but the power is what flies.
                            </div><div class="panel-title"><span class="caption">Panel title</span><span class="mif-apps icon"></span><span class="dropdown-toggle marker-center active-toggle"></span></div></div>

                            
                        </div>
                    </div>
                </div></div>';
        $this->page->scriptsendpage = 'var nv = $("#navview1").data("navview");nv.open(); nv.close();';
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
