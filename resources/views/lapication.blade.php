<!DOCTYPE html>
<html>
<head>
	<title>lapication</title>
</head>
<body>
<h1>lapi'cation est une application gratuite vous permettant d'acceder directement a votre bibliotheque contenant les livres que vous achetez sur notre site.</h1>

<!--____________________________________________________________CAROUSSEL__________________________________________________-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="img-responsive center-block" src="{{URL::asset('/img/lapin1.jpg')}}">
            <p>TEXTE</p>
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{URL::asset('/img/lapin2.jpg')}}">
            <p>TEXTE</p>
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{URL::asset('/img/lapin3.jpg')}}">
            <p>TEXTE</p>
        </div>
        <div class="item">
            <img class="img-responsive center-block" src="{{URL::asset('/img/lapin4.jpg')}}">
            <p>TEXTE</p>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span></span>
    </a>
<h3>Téléchargement</h3>
</div>
<div class="row">
<div class="col-md-6"><a href="#"> <img src="{{URL::asset('/img/android.png')}}"></a></div>
<div class="col-md-6"><a href="#"> <img src="{{URL::asset('/img/apple.png')}}"></a></div>
</div>

</body>
</html>