<?php
class cards{
	public $adcss;			// css adicional
	public $adjs;			// js adicional
	public $tipoconta;
	public $somacontent;
	public function __construct(){

	}
	public function render(){
		switch ($this->tipoconta) {
			case 'free':
				echo '<div class="col-md-4" style="border-radius: 10px !important">
                <!--Card-->
                <div class="card testimonial-card" style="border-radius: 10px" >
                    <!--Bacground color-->
                    <div class="card-up default-color-dark" style="background-color: #ec039c;">
                    </div>
                    <!--Avatar-->
                    <div class="avatar"><img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive" alt="Sample avatar image.">
                    </div>
                    <div class="card-block">
                        <!--Name-->
                        <h4 class="card-title">John Doe</h4>
                        <hr>
                        <!--Quotation-->
                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                    </div>
                </div>';
				break;		
			default:
				echo '<div class="col-md-4" >
                <!--Rotating card-->
                <div class="card-wrapper" style="border-radius: 10px !important">
                    <div id="card-1" class="card-rotating effect__click" style="border-radius: 10px !important">
                        <!--Front Side-->
                        <div class="face front" style="border-radius: 10px !important; background-color: #184DAD; color:white">
                            <!-- Image-->
                            <div class="card-up">
                                <img style="border-radius: 10px !important" src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%2859%29.jpg" class="img-fluid" alt="Image with a photo of clouds.">
                            </div>
                            <!--Avatar-->
                            <div class="avatar"><img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%289%29.jpg" class="rounded-circle img-responsive" alt="Sample avatar image.">
                            </div>
                            <!--Content-->
                            <div class="card-block">
                                <h4>Jonathan Doe</h4>
                                <p>Web developer</p>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                        </div>
                        <!--/.Front Side-->
                        <!--Back Side-->
                        <div class="face back" style="border-radius: 10px !important">
                            <!--Content-->
                            <h4>About me</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
                            <hr>
                            <!--Social Icons-->
                            <ul class="inline-ul">
                                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>
                        </div>
                        <!--/.Back Side-->
                    </div>
                </div>';
				break;
		}
		
	}
	public function html(){
		switch ($this->tipoconta) {
			case 'free':
				$this->somacontent = '<div class="col-md-4" style="border-radius: 10px !important">
                <!--Card-->
                <div class="card testimonial-card" style="border-radius: 10px" >
                    <!--Bacground color-->
                    <div class="card-up default-color-dark" style="background-color: #ec039c;">
                    </div>
                    <!--Avatar-->
                    <div class="avatar"><img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive" alt="Sample avatar image.">
                    </div>
                    <div class="card-block">
                        <!--Name-->
                        <h4 class="card-title">John Doe</h4>
                        <hr>
                        <!--Quotation-->
                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                    </div>
                </div>';
				break;		
			default:
				$this->somacontent = '<div class="col-md-4" >
                <!--Rotating card-->
                <div class="card-wrapper" style="border-radius: 10px !important">
                    <div id="card-1" class="card-rotating effect__click" style="border-radius: 10px !important">
                        <!--Front Side-->
                        <div class="face front" style="border-radius: 10px !important; background-color: #184DAD; color:white">
                            <!-- Image-->
                            <div class="card-up">
                                <img style="border-radius: 10px !important" src="http://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%2859%29.jpg" class="img-fluid" alt="Image with a photo of clouds.">
                            </div>
                            <!--Avatar-->
                            <div class="avatar"><img src="http://mdbootstrap.com/img/Photos/Avatars/img%20%289%29.jpg" class="rounded-circle img-responsive" alt="Sample avatar image.">
                            </div>
                            <!--Content-->
                            <div class="card-block">
                                <h4>Jonathan Doe</h4>
                                <p>Web developer</p>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"></i> Click here to rotate</a>
                            </div>
                        </div>
                        <!--/.Front Side-->
                        <!--Back Side-->
                        <div class="face back" style="border-radius: 10px !important">
                            <!--Content-->
                            <h4>About me</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat?</p>
                            <hr>
                            <!--Social Icons-->
                            <ul class="inline-ul">
                                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="icons-sm li-ic"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Click here to rotate back</a>
                        </div>
                        <!--/.Back Side-->
                    </div>
                </div>';
                return $this->somacontent;
				break;
		}
		
	}
}
?>