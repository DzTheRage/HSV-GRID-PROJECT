<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />
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
	<title>HSV GRID PROJECT</title>
	<meta name="description" content="UAH Photography Grid Project">
	<meta name="keywords" content="huntsville, grid project, UAH, UAH Photo" />
	<meta name="author" content="ScottV" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- MAP CSS -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<div class="container-fluid fixed widthNAV">
		<div class="row navBGcolor">
		<div class="col-xl-10 col-xl-offset-2 col-lg-8 col-lg-offset-2 col-md-12 col-sm-12">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="index.php"><img src="img/hsvlogo2.png" class="mobilelogo" alt="home logo"></a>
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
	<div id="top">
	<header class="hero">
		<div class="hero-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="hero-intro-text wp4">
							<cms:editable name='intro_header' type='richtext'>
							<h2 class="hidemobile">WELCOME TO THE</h2>
							<h1 class="hidemobile">Huntsville Grid Project</h1>
							<p class="hidemobile">Click the grid below to view photos or scroll down for information on the project.</p>
							</cms:editable>
							<cms:editable name='intro_header_mobile' type='richtext'>
							<h2 class="headersmall mobileFILLER">WELCOME TO THE</h2>
							<h1 class="mobileFILLER">Huntsville Grid Project</h1>
							<p class="mobileFILLER">Click the link below to visit the photo gallery or scroll for more information on the project.</p>
							</cms:editable>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid hidemobile wp4">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<hr>
			<!-- IMAGE MAP START --->
		<main>
			<section class="interactive-points" id="interactive-1" tabindex="0">
				<img class="static" src="img/map2.jpg" alt="Map of HSV" />
				<div class="backgrounds hidemobile">
					<div class="background__element" style="background-image: url("<cms:editable name='grida1_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='grida2_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='grida3_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='grida4_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='grida5_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridb1_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridb2_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridb3_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridb4_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridb5_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridc1_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridc2_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridc3_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridc4_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridc5_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridd1_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridd2_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridd3_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridd4_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gridd5_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gride1_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gride2_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gride3_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gride4_image' type='image' />")"></div>
					<div class="background__element" style="background-image: url("<cms:editable name='gride5_image' type='image' />")"></div>
				</div>
				<svg class="points" viewBox="0 0 1885 1080" width="100%" height="100%">
				<path class="point"d="M566,190.554c51.163,0.807,67.47,0.985,168.227,0.311L733.921,18.02c-79.269,0-96.117,1.031-167.599,0.646"/>
				<path class="point"d="M739,190.554c52.193,0.807,68.828,0.985,171.613,0.311L910.302,18.02c-80.865,0-98.051,1.031-170.973,0.646"
				d="M566,190.554c51.163,0.807,67.47,0.985,168.227,0.311L733.921,18.02c-79.269,0-96.117,1.031-167.599,0.646"/>
				<path class="point"d="M915.748,190.554c51.163,0.807,67.47,0.985,168.227,0.311L1083.67,18.02c-79.27,0-96.117,1.031-167.6,0.646"/>	
				<path class="point" d="M1088.748,190.554c52.193,0.807,68.828,0.985,171.613,0.311L1260.05,18.02
				c-80.864,0-98.052,1.031-170.974,0.646"/>
				<path class="point"d="M1264.721,190.554c51.483,0.807,67.893,0.985,169.279,0.311l-0.308-172.846
				c-79.764,0-96.718,1.031-168.648,0.646"/>
				<path class="point"d="M566,363.794c51.163,0.784,67.47,0.958,168.227,0.302l-0.305-168.043c-79.269,0-96.117,1.002-167.599,0.628"
				/>	
				<path class="point"d="M739,363.794c52.193,0.784,68.828,0.958,171.613,0.302l-0.312-168.043c-80.865,0-98.051,1.002-170.973,0.628"/>
				<path class="point"d="M915.748,363.794c51.163,0.784,67.47,0.958,168.227,0.302l-0.305-168.043c-79.27,0-96.117,1.002-167.6,0.628"/>
				<path class="point" d="M1088.748,363.794c52.193,0.784,68.828,0.958,171.613,0.302l-0.312-168.043
				c-80.864,0-98.052,1.002-170.974,0.628"/>
				<path class="point"d="M1264.721,363.794c51.483,0.784,67.893,0.958,169.279,0.302l-0.308-168.043
				c-79.764,0-96.718,1.002-168.648,0.628"/>
				<path class="point"d="M566,540.037c51.163,0.8,67.47,0.977,168.227,0.308l-0.305-171.508c-79.269,0-96.117,1.023-167.599,0.641"/>
				<path class="point"d="M739,540.037c52.193,0.8,68.828,0.977,171.613,0.308l-0.312-171.508c-80.865,0-98.051,1.023-170.973,0.641"/>
				<path class="point" d="M915.748,540.037c51.163,0.8,67.47,0.977,168.227,0.308l-0.305-171.508c-79.27,0-96.117,1.023-167.6,0.641"/>
				<path class="point" d="M1088.748,540.037c52.193,0.8,68.828,0.977,171.613,0.308l-0.312-171.508
				c-80.864,0-98.052,1.023-170.974,0.641"/>
				<path class="point" d="M1264.721,540.037c51.483,0.8,67.893,0.977,169.279,0.308l-0.308-171.508
				c-79.764,0-96.718,1.023-168.648,0.641"/>
				<path class="point"d="M566,713.296c51.163,0.784,67.47,0.957,168.227,0.302l-0.305-168.066c-79.269,0-96.117,1.002-167.599,0.628"/>
				<path class="point"d="M739,713.296c52.193,0.784,68.828,0.957,171.613,0.302l-0.312-168.066c-80.865,0-98.051,1.002-170.973,0.628"/>
				<path class="point"d="M915.748,713.296c51.163,0.784,67.47,0.957,168.227,0.302l-0.305-168.066c-79.27,0-96.117,1.002-167.6,0.628"/>
				<path class="point" d="M1088.748,713.296c52.193,0.784,68.828,0.957,171.613,0.302l-0.312-168.066
				c-80.864,0-98.052,1.002-170.974,0.628"/>
				<path class="point"d="M1264.721,713.296c51.483,0.784,67.893,0.957,169.279,0.302l-0.308-168.066
				c-79.764,0-96.718,1.002-168.648,0.628"/>
				<path class="point" d="M566,889.975c51.163,0.8,67.47,0.977,168.227,0.308l-0.305-171.508c-79.269,0-96.117,1.022-167.599,0.641"/>
				<path class="point"d="M739,889.975c52.193,0.8,68.828,0.977,171.613,0.308l-0.312-171.508c-80.865,0-98.051,1.022-170.973,0.641"/>
				<path class="point" d="M915.748,889.975c51.163,0.8,67.47,0.977,168.227,0.308l-0.305-171.508c-79.27,0-96.117,1.022-167.6,0.641"/>
				<path class="point" d="M1088.748,889.975c52.193,0.8,68.828,0.977,171.613,0.308l-0.312-171.508
				c-80.864,0-98.052,1.022-170.974,0.641"/>
				<path class="point" d="M1264.721,889.975c51.483,0.8,67.893,0.977,169.279,0.308l-0.308-171.508
				c-79.764,0-96.718,1.022-168.648,0.641"/>
				</svg>
				<div class="points-tooltips hidemobile">
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid A1</h2></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid A2</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid A3</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid A4</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid A5</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid B1</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid B2</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid B3</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid B4</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid B5</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid C1</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid C2</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid C3</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid C4</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid C5</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid D1</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid D2</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid D3</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid D4</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid D5</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid E1</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid E2</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid E3</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid E4</h2><br></div>
					<div class="point-tooltip"><h2 class="point-tooltip__title">Grid E5</h2><br></div>
				</div>
				<div class="points-content">
					<div class="point-content">
						<p class="point-content__text">Featured Image:</p>
						<h3 class="point-content__title"><cms:editable name='imagetitle_a1' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_a1' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_a1' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_a2' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_a2' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_a2' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_a3' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_a3' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_a3' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_a4' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_a4' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_a4' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_a5' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_a5' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_a5' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_b1' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_b1' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_b1' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_b2' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_b2' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_b2' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_b3' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_b3' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_b3' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_b4' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_b4' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_b4' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_b5' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_b5' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_b5' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_c1' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_c1' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_c1' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_c2' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_c2' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_c2' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_c3' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_c3' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_c3' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_c4' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_c4' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_c4' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_c5' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_c5' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_c5' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_d1' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_d1' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_d1' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_d2' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_d2' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_d2' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_d3' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_d3' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_d3' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_d4' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_d4' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_d4' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_d5' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_d5' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_d5' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_e1' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_e1' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_e1' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_e2' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_e2' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_e2' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_e3' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_e3' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_e3' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_e4' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_e4' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_e4' type='text'>Sammy Binks</cms:editable></p>
					</div>
					<div class="point-content">
						<h3 class="point-content__title"><cms:editable name='imagetitle_e5' type='text'>The Rupert Connection</cms:editable></h3>
						<p class="point-content__subtitle"><cms:editable name='date_e5' type='text'>24th of February, 1927</cms:editable></p>
						<p class="point-content__text"><cms:editable name='author_e5' type='text'>Sammy Binks</cms:editable></p>
					</div>
				</div>
			</section>
		</main>
<!-- MAP END -->
					</div>
						</div>
					</div>
			<div class="container mobileFILLER wp4">
			<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<img class="static" src="img/map4.jpg" alt="Map of HSV" />
			</div>
			</div>
			</div>
				</div>
			</div>
		</div>
	</header>
	</div>
			<div class="container-fluid">
			<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 center view-more2">
			<a href="photogallery.php" class="gridlinks">VIEW PHOTO GALLERY</a>
			</div>
			</div>
			</div>
	<!-- SECTION: Intro -->
	<section class="collective has-padding" id="intro" name="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4>About</h4>
				</div>
				<div class="col-md-9">
					<cms:editable name='about_content' type='richtext'>
					<p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella.
					Kinfolk gluten-free lo-fi quinoa. Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out.
					Kale chips chillwave kickstarter photo booth cronut cold-pressed. Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag,
					hammock pour-over chambray viral VHS normcore.</p>
					</cms:editable>
					<div class="about-image">
						<img class="img" src="<cms:editable name='about_image' width='300' height='200' type='image' crop='1' />">
					</div>
					<cms:editable name='about_content2' type='richtext'>
					<p>8-bit aesthetic kitsch 90's humblebrag. Gastropub tacos hoodie letterpress, banjo normcore trust fund hella. Kinfolk gluten-free lo-fi quinoa. </p>
					<p>Pabst kitsch ennui hoodie meggings banjo. Schlitz tacos kitsch godard before they sold out. Kale chips chillwave kickstarter photo booth cronut cold-pressed.
					Banjo fixie umami kombucha affogato gluten-free authentic slow-carb hashtag, hammock pour-over chambray viral VHS normcore.</p>
					</cms:editable>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Intro -->
	<!-- SECTION: Stats -->
	<div class="stats has-padding-tall" style="background-image:url(<cms:editable name='bg_stats' type='image' />);">
		<div class="container">
			<div class="row wp4">
				<div class="col-md-6 col-sm-6 stats-container">
					<i class="fa fa-camera fa-4x" aria-hidden="true"></i>
					<div class="stats-wrapper">
						<cms:editable name='stat_photos_change_numbers_only' type='text'>
						<p class="stats-number" data-stop="250">250</p>
						</cms:editable>
						<p class="stats-text">Photos Taken</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 stats-container">
					<i class="fa fa-user fa-4x" aria-hidden="true"></i>
					<div class="stats-wrapper">
						<cms:editable name='stat_photographers_change_numbers_only' type='text'>
						<p class="stats-number" data-stop="43">43</p>
						</cms:editable>
						<p class="stats-text">Photographers</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SECTION: Stats -->
	<!-- SECTION: SIMILAR SITES-->
	<section class="similarsites has-padding" id="similarsites" name="similarsites">
		<div class="container similarsites-intro">
			<div class="row">
				<div class="col-md-12">
					<h4>Similar Sites</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 content-left">
					<cms:editable name='similarsite_content' type='richtext'>
					<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra
					elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque
					integer suspendisse a mus integer elit.</p>
					</cms:editable>
				</div>
				<div class="col-md-6 content-right">
					<cms:editable name='similarsite_content2' type='richtext'>
					<p>A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus
					cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus
					adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit.</p>
					</cms:editable>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 no-padding">
					<article class="item wp5">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="similarsites-content">
									<cms:editable name='similarsite_site1' type='richtext'>
									<h2></h2>
									</cms:editable>
									<div class="group">
										<a href="<cms:editable name='similarsite_site1_link' type='text'></cms:editable>" class="btn secondary" target="_blank">Visit</a>
									</div>
								</div>
							</figcaption>
							<img src="<cms:editable name='similarsite_site1_image' width='700' type='image' />">
						</figure>
					</article>
				</div>
				<div class="col-md-6 no-padding">
					<article class="item wp6">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="similarsites-content">
									<cms:editable name='similarsite_site2' type='richtext'>
									<h2></h2>
									</cms:editable>
									<div class="group">
										<a href="<cms:editable name='similarsite_site2_link' type='text'></cms:editable>" class="btn secondary" target="_blank">Visit</a>
									</div>
								</div>
							</figcaption>
							<img src="<cms:editable name='similarsite_site2_image' width='700' type='image' />">
						</figure>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 no-padding">
					<article class="item wp7">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="similarsites-content">
									<cms:editable name='similarsite_site3' type='richtext'>
									<h2></h2>
									</cms:editable>
									<div class="group">
										<a href="<cms:editable name='similarsite_site3_link' type='text'></cms:editable>" class="btn secondary" target="_blank">Visit</a>
									</div>
								</div>
							</figcaption>
								<img src="<cms:editable name='similarsite_site3_image' width='700' type='image' />">
						</figure>
					</article>
				</div>
				<div class="col-md-6 no-padding">
					<article class="item wp8">
						<figure class="has-overlay">
							<figcaption class="overlay">
								<div class="similarsites-content">
									<cms:editable name='similarsite_site4' type='richtext'>
									<h2></h2>
									</cms:editable>
									<div class="group">
										<a href="<cms:editable name='similarsite_site4_link' type='text'></cms:editable>" class="btn secondary" target="_blank">Visit</a>
									</div>
								</div>
							</figcaption>
								<img src="<cms:editable name='similarsite_site4_image' width='700' type='image' />">
						</figure>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: similarsites -->
	<!-- SECTION: CONTACT --->
	<section class="similarsites" id="contact" name="contact">
		<div class="container similarsites-intro">
			<div class="row">
				<div class="col-md-12">
					<h4>Contact</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 content-left">
					<cms:editable name='contact_content1' type='richtext'>
					<p>Why contact</p>
					</cms:editable>
				</div>
				<div class="col-md-6 content-right">
					<cms:editable name='contact_content2' type='richtext'>
					<p>Contact Info</p>
					</cms:editable>
				</div>
			</div>
		</div>
	<!-- END SECTION: CONTACT -->
	<!-- SECTION: Get started -->
	<section style="height:400px;" class="get-started has-padding text-center" id="get-started" style="background-image:url(<cms:editable name='bg_thanks_for_visitng' type='image' />);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wp4">
					<h2>THANKS FOR VISITING THE HSV GRID PROJECT!</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- END SECTION: Get started -->
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
						<li><a href="#intro">About</a></li>
						<li><a href="#similarsites">Similar Sites</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- END SECTION: Footer -->
	<!-- JS CDNs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
	<script src="js/lunar.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/main.js"></script>
		<script>
		(function() {
			new PointsMap(document.querySelector('#interactive-1'));
			new PointsMap(document.querySelector('#interactive-2'), {
				// Maximum opacity that the background element of a Point can have when the point is active (mouse gets closer to it).
				maxOpacityOnActive : 1,
				// When the mouse is [activeOn]px away from one point, its image gets opacity = point.options.maxOpacity.
				activeOn : 90
			});
		})();
		</script>
	<script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/retina.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/flickity.pkgd.min.js"></script>
	<script src="js/min/scripts-min.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>