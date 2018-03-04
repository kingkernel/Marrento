<?php
class carousel{
	public function __construct(){

	}
	public function html(){
	$this->addContent = '<style>/* Makes images fully responsive */

.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100%;
  height: auto;
}

/* ------------------- Carousel Styling ------------------- */

.carousel-inner {
  border-radius: 15px;
}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}


/* ------------------- Section Styling - Not needed for carousel styling ------------------- */

.section-white {
   padding: 10px 0;
}

.section-white {
  background-color: #fff;
  color: #555;
}

@media screen and (min-width: 768px) {

  .section-white {
     padding: 1.5em 0;
  }

}

@media screen and (min-width: 992px) {

  .container {
    max-width: 930px;
  }

}</style><section class="section-white">
  <div class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2> <p>texto simples.</p>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
        <div class="item">
          <img src="http://placehold.it/800x400" alt="...">
          <div class="carousel-caption">
            <h2>Heading</h2>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>';
        return $this->addContent;
	}
  public function html2(){
    echo '<style>.carousel-caption {
  position: relative;
  left: 0%;
  right: 0%;
  bottom: 0px;
  z-index: 10;
  padding-top: 0px;
  padding-bottom: 0px;
  color: #000;
  text-shadow: none;
  & .btn {
    text-shadow: none; // No shadow for button elements in carousel-caption
  }
}

.carousel {
    position: relative;
}

.controllers {
    position: absolute;
    top: 0px;
}

.carousel-control.left, 
.carousel-control.right {
    background-image: none;
}</style><div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
  <div class="holder col-sm-8">
    <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
  </div>
  <div class="col-sm-4">
    <div class="carousel-caption">
        <h2>Slide 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
        <button type="button" class="btn btn-default">Default</button>    
    </div>
  </div>
</div>
<div class="item">
  <div class="holder col-sm-8">
    <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
  </div>
  <div class="col-sm-4">
    <div class="carousel-caption">
        <h2>Slide 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
        <button type="button" class="btn btn-default">Default</button>    
    </div>
  </div>
</div>
<div class="item">
  <div class="holder col-sm-8">
    <img class="img-responsive" src="http://placehold.it/1000x400" alt="...">
  </div>
  <div class="col-sm-4">
    <div class="carousel-caption">
        <h2>Slide 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
        <button type="button" class="btn btn-default">Default</button>    
    </div>
  </div>
</div>
</div>
<div class="controllers col-sm-8 col-xs-12">
<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> 
</div><script>$(window).bind("load resize slid.bs.carousel", function() {
  var imageHeight = $(".active .holder").height();
  $(".controllers").height( imageHeight );
  console.log("Slid");
});</script>';
  }
}
?>