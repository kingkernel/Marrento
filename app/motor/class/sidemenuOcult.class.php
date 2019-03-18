<?php
    class sideMenuOcult {
        //public $bgColor = '#7386D5';
        public $bgColor = '#333333';
        public $title = 'Menu Lateral';
        public $titleIcon = 'fas fa-arrow-left';
        public $buttonText = "Menu Oculto";
        public $buttonIcon = "fas fa-align-left";
        public $subtitle = "Sub-Movel";
		public function __construct(){
            $this->css = '#sidebar{width: 250px;position: fixed;top: 0;left: -250px;height: 100vh;z-index: 999;background: '.$this->bgColor.' /* #7386D5*/ ;color: #fff;transition: all 0.3s;overflow-y: scroll;box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);}#sidebar.active {left: 0;}#dismiss {width: 35px;height: 35px;line-height: 35px;text-align: center;background: #7386D5;position: absolute;top: 10px;right: 10px;cursor: pointer;-webkit-transition: all 0.3s;-o-transition: all 0.3s;transition: all 0.3s;}#dismiss:hover {background: #fff;color: #7386D5;}.overlay {display: none;position: fixed;width: 100vw;height: 100vh;background: rgba(0, 0, 0, 0.7);z-index: 998;opacity: 0;transition: all 0.5s ease-in-out;}.overlay.active {display: block;opacity: 1;}#sidebar .sidebar-header {padding: 20px;background: #6d7fcc;}#sidebar ul.components {padding: 20px 0;border-bottom: 1px solid #47748b;}#sidebar ul p {color: #fff;padding: 10px;}#sidebar ul li a {padding: 10px;font-size: 1.1em;display: block;}#sidebar ul li a:hover {color: #7386D5;background: #fff;}#sidebar ul li.active>a,a[aria-expanded="true"] {color: #fff;background: #6d7fcc;}a[data-toggle="collapse"]{position: relative;}.dropdown-toggle::after {display: block;position: absolute;top: 50%;right: 20px;transform: translateY(-50%);}ul ul a {font-size: 0.9em !important;padding-left: 30px !important;background: #6d7fcc;}ul.CTAs {padding: 20px;}ul.CTAs a {text-align: center;font-size: 0.9em !important;display: block;border-radius: 5px;margin-bottom: 5px;}a.download {background: #fff;color: #7386D5;}a.article, a.article:hover {background: #6d7fcc !important;color: #fff !important;} @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"; body {font-family: "Poppins", sans-serif;background: #fafafa;} p {font-family: "Poppins", sans-serif;font-size: 1.1em;font-weight: 300;line-height: 1.7em;color: #999;} a, a:hover, a:focus {color: inherit;text-decoration: none;transition: all 0.3s;}.navbar {padding: 15px 10px;background: #fff;border: none;border-radius: 0;margin-bottom: 40px;box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);}.navbar-btn {box-shadow: none;outline: none !important;border: none;}.line {width: 100%;height: 1px;border-bottom: 1px dashed #ddd;margin: 40px 0;} #content {width: 100%;padding: 20px;min-height: 100vh;transition: all 0.3s;position: absolute;top: 0;right: 0;}';
			return $this->css;
		}
		public function html(){
			$this->content = '<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="'.$this->titleIcon.'"></i>
            </div>
            <div class="sidebar-header">
                <h3>'.$this->title.'</h3>
            </div>
            <ul class="list-unstyled components">
                <p>'.$this->subtitle.'</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid"><button type="button" id="sidebarCollapse" class="btn btn-info"><i class="'.$this->buttonIcon.'"></i><span> '.$this->buttonText.' </span></button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                    $login = new li_item;
                        $login->iconclass = "glyphicon glyphicon-home";
                        $login->text = "Login";
                        $login->class = "nav-item active";
                        $login->aClass = "nav-link";
                    $chamados = new li_item;
                        $chamados->iconclass = "glyphicon glyphicon-home";
                        $chamados->text = "chamados";
                        $chamados->class = "nav-item";
                        $chamados->aClass = "nav-link";
                    $ulmenu = new ulList;
                        $ulmenu->class = "nav navbar-nav ml-auto";
                        $ulmenu->liItens=[$login, $chamados];
        $this->content .= $ulmenu->html();
        $this->content .= '</div>
                </div>
            </nav>';

$avisosimples = new avisoSimples;
$avisosimples->title = "Collapsible Sidebar Using Bootstrap 4";
$avisosimples->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//$avisosimples->render();

$artigos = new divider;
$artigos->text = [$avisosimples, $avisosimples];
echo $artigos->union($artigos->text);
echo '<!-- card -->
<style>
.card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.card-profile {
    margin-top: 30px;
    text-align: center;
}
.card-profile .card-avatar, .card-testimonial .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
</style>
            <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#"> <img class="img" src="http://adamthemes.com/demo/code/cards/images/avatar1.png"> </a>
                            </div>
                            <div class="table">
                                <h4 class="card-caption">Patrick Wood</h4>
                                <h6 class="category text-muted">CEO / Co-Founder</h6>
                                <p class="card-description"> Don\'t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is... </p>
                                <div class="ftr"> <a href="#" class="btn btn-just-icon btn-pinterest btn-round"><i class="fa fa-pinterest"></i>
                                    </a> <a href="#" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a> </div>
                            </div>
                        </div>
                    </div>
<!-- card -->
        </div>
    </div>

    <div class="overlay"></div>';
return $this->content;
		}
	};
?>