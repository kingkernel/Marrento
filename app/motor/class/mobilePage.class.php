<?php
class mobilePage{
	public $addContent;
	public $css;
	public $js;
	public function __construct(){

	}
	public function testeprint(){
		echo "teste";
	}
	public function index(){
	echo '<style>
			@media (min-width: 992px) {
				.header a {
					display: none;
				}
			}=
			.mm-navbar_tabs span {
				display: inline-block;
				margin-left: 8px;
			}
			@media (max-width: 450px) {
				.mm-navbar_tabs span {
					display: none;
				}
			}
		</style><script>
			$(function() {
				$(\'nav#menu\').mmenu({
					extensions	: [ \'theme-dark\' ],
					setSelected	: true,
					counters	: true,
					searchfield : {
						placeholder		: \'Search menu items\'
					},
					iconbar		: {
						add 		: true,
						size		: 40,
						top 		: [ 
							\'<a href="#/"><span class="fa fa-home"></span></a>\'
						],
						bottom 		: [
							\'<a href="#/"><span class="fa fa-twitter"></span></a>\',
							\'<a href="#/"><span class="fa fa-facebook"></span></a>\',
							\'<a href="#/"><span class="fa fa-youtube"></span></a>\'
						]
					},
					sidebar		: {
						collapsed		: {
							use 			: \'(min-width: 450px)\',
							size			: 40,
							hideNavbar		: false
						},
						expanded		: {
							use 			: \'(min-width: 992px)\',
							size			: 35
						}
					},
					navbars		: [
						{
							content		: [ \'searchfield\' ]
						}, {
							type		: \'tabs\',
							content		: [ 
								\'<a href="#panel-menu"><i class="fa fa-bars"></i> <span>Menu</span></a>\', 
								\'<a href="#panel-account"><i class="fa fa-user"></i> <span>Account</span></a>\', 
								\'<a href="#panel-cart"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>\'
							]
						}, {
							content		: [ \'prev\', \'breadcrumbs\', \'close\' ]
						}, {
							position	: \'bottom\',
							content		: [ \'<a href="http://mmenu.frebsite.nl/wordpress-plugin" target="_blank">WordPress plugin</a>\' ]
						}
					]
				}, {
					searchfield : {
						clear 		: true
					},
					navbars		: {
						breadcrumbs	: {
							removeFirst	: true
						}
					}
				});
				$(\'a[href^="#/"]\').click(function() {
					alert( "Thank you for clicking, but thats a demo link");
					return false;
				})
			});
		</script>
	<div id="page">
			<div class="header">
				<a href="#menu"><span></span></a>
				Demo
			</div>
			<div class="content">
				<p><strong>This is an advanced demo.</strong><br />
					Click the menu icon to open the menu.</p>
			</div>
			<nav id="menu">
				<div id="panel-menu">
					<ul>
						<li><a href="#/">Home</a></li>
						<li><span>About us</span>
							<ul>
								<li><a href="#/">History</a></li>
								<li><span>The team</span>
									<ul>
										<li><a href="#/">Management</a></li>
										<li><a href="#/">Sales</a></li>
										<li><a href="#/">Development</a></li>
									</ul>
								</li>
								<li><a href="#/">Our address</a></li>
							</ul>
						</li>
						<li><a href="#/">Contact</a></li>

						<li class="Divider">Other demos</li>
						<li><a href="default.html">Default demo</a></li>
						<li><a href="onepage.html">One page demo</a></li>
					</ul>
				</div>
				<div id="panel-account">
					<ul>
						<li><a href="#/">My profile</a></li>
						<li><a href="#/">Privacy settings</a></li>
						<li><a href="#/">Activity</a></li>
						<li><a href="#/">Sign out</a></li>
					</ul>
				</div>
				<div id="panel-cart">
					<p style="text-align: center; padding-top: 30px;">Your shoppingcart is empty.<br />
						<a href="#/">Continue shopping.</a></p>
				</div>
			</nav>
		</div>
				';
	}
}
?>