<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Gallery Main' />
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HSV GRID PROJECT - Photo Gallery</title>
	<meta name="description" content="HSV Grid Project Photo Gallery">
	<meta name="keywords" content="huntsville, grid project, UAH, UAH Photo, Photo Gallery" />
	<meta name="author" content="ScottV Codrops" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/gallerymain.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<div class="container-fluid fixed widthNAV">
		<div class="row navBGcolor">
		<div class="col-xl-10 col-xl-offset-2 col-lg-8 col-lg-offset-2 col-md-12 col-sm-12">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="index.php"><img src="https://i.imgur.com/PvQZx7W.png" class="mobilelogo" alt="home logo"></a>
				</div>
				<div class="primary-nav-wrapper">
					<nav>
						<ul class="primary-nav">
							<li><a href="photogallery.php">Photo Gallery</a></li>
							<li><a href="index.php#intro">About</a></li>
							<li><a href="index.php#similarsites">Similar Sites</a></li>
							<li><a href="index.php#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="navicon">
					<a class="nav-toggle" href="#"><span></span></a>
				</div>
			</div>
		</div>
		</div>
	</div>
<div class="container-fluid wp4">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
	<!-- Contact Start -->
	<div class="galleryhead">
		<h2>Grid Gallery</h2>
	</div>
</div>
</div>
</div>
	  <div class="flex-wrapper">

        <a class="one" href="grida1.php" style="background-image:url(<cms:editable name='bg_picture_a1' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
                        <h2>A1</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="two" href="grida2.php" style="background-image:url(<cms:editable name='bg_picture_a2' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>A2</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="three" href="grida3.php" style="background-image:url(<cms:editable name='bg_picture_a3' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>A3</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="four" href="grida4.php" style="background-image:url(<cms:editable name='bg_picture_a4' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>A4</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="five" href="grida5.php" style="background-image:url(<cms:editable name='bg_picture_a5' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>A5</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
	<!-- TWO -->
		  <div class="flex-wrapper">

        <a class="six" href="gridb1.php" style="background-image:url(<cms:editable name='bg_picture_b1' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>B1</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="seven" href="gridb2.php" style="background-image:url(<cms:editable name='bg_picture_b2' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>B2</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="eight" href="gridb3.php" style="background-image:url(<cms:editable name='bg_picture_b3' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>B3</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="nine" href="gridb4.php" style="background-image:url(<cms:editable name='bg_picture_b4' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>B4</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="ten" href="gridb5.php" style="background-image:url(<cms:editable name='bg_picture_b5' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>B5</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
    <!--- THREE ROW --->
		  <div class="flex-wrapper">

        <a class="eleven" href="gridc1.php" style="background-image:url(<cms:editable name='bg_picture_c1' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>C1</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twelve" href="gridc2.php" style="background-image:url(<cms:editable name='bg_picture_c2' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>C2</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="thirteen" href="gridc3.php" style="background-image:url(<cms:editable name='bg_picture_c3' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>C3</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="fourteen" href="gridc4.php" style="background-image:url(<cms:editable name='bg_picture_c4' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>C4</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="fifteen" href="gridc5.php" style="background-image:url(<cms:editable name='bg_picture_c5' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>C5</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
	<!--- Four Row --->
		  <div class="flex-wrapper">

        <a class="sixteen" href="gridd1.php" style="background-image:url(<cms:editable name='bg_picture_d1' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>D1</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="seventeen" href="gridd2.php" style="background-image:url(<cms:editable name='bg_picture_d2' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>D2</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="eighteen" href="gridd3.php" style="background-image:url(<cms:editable name='bg_picture_d3' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>D3</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="nineteen" href="gridd4.php" style="background-image:url(<cms:editable name='bg_picture_d4' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>D4</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twenty" href="gridd5.php" style="background-image:url(<cms:editable name='bg_picture_d5' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>D5</h2>
                    </div>
                </div>
            </div>
        </a>

    </div>
	<!-- FIVE ROW --->
		  <div class="flex-wrapper">

        <a class="twentyone" href="gride1.php" style="background-image:url(<cms:editable name='bg_picture_e1' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>E1</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twentytwo" href="gride2.php" style="background-image:url(<cms:editable name='bg_picture_e2' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>E2</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twentythree" href="gride3.php" style="background-image:url(<cms:editable name='bg_picture_e3' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>E3</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twentyfour" href="gride4.php" style="background-image:url(<cms:editable name='bg_picture_e4' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>E4</h2>
                    </div>
                </div>
            </div>
        </a>

        <a class="twentyfive" href="gride5.php" style="background-image:url(<cms:editable name='bg_picture_e5' type='image' />);">
            <div class="overlay"></div>
            <div class="inner">
                <div>
                    <div class="visible">
						 <h2>E5</h2>
                    </div>
                </div>
            </div>
        </a>
</div>
	<!-- SECTION: Footer -->
	<footer class="has-padding footer-bg">
		<div class="container">
			<p class="footercopy">All photographs are copyright by the respective artists and may not be used without the express permission of the
			photographer or the UAH Art Department. If you have more interest in the UAH Art Department, please visit
			this link:<a class="footerlink" href="http://www.uah.edu/ahs/departments/art"> UAH ART DEPARTMENT</a></p>
			<div class="row footer-ROW">
				<div class="col-md-7 col-md-offset-2 col-lg-6 col-lg-offset-3 col-sm-10 col-sm-offset-2 footer-nav">
					<ul class="footer-primary-nav">
						<li><a href="photogallery.php">Photo Gallery</a></li>
						<li><a href="index.php#intro">About</a></li>
						<li><a href="index.php#similarsites">Similar Sites</a></li>
						<li><a href="index.php#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- END SECTION: Footer -->
	<!-- JS CDNs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<!-- JS Locals -->
	<script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/scripts-min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>