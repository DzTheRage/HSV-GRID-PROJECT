<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Grid D5' clonable='1' dynamic_folders='1' gallery='1'>
	   <cms:editable
      name="gg_image"
      label="Image"
      desc="Upload your main image here"
      width="500"
      show_preview='1'
      preview_height='200'
      type="image"
   />

   <cms:editable
      name="gg_thumb"
      assoc_field="gg_image"
      label="Image Thumbnail"
      desc="Thumbnail of image above"
      width='115'
      height='115'
      enforce_max='1'
      type="thumbnail"
   />
   <cms:editable name='image_title' type='text' />
</cms:template>
<cms:if k_is_page >
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HSV GRID PROJECT</title>
	<meta name="description" content="UAH Photography Grid Project">
	<meta name="keywords" content="huntsville, grid project, UAH, UAH Photo" />
	<meta name="author" content="ScottV Codrops" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- end favicon links -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/gridblock.css" />
	<link rel="stylesheet" href="css/gallerymain.css">
	<script src="js/modernizr-custom.js"></script>
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
<!-- CONTENT START -->
<div class="container-fluid">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
	<!-- Contact Start -->
	<div class="galleryhead wp4">
		<h2>Grid D5</h2>
	</div>
</div>
</div>
</div>
		<div class="content">
			<div class="grid">
				<div class="grid__item" data-size="1280x961">
					<a href="<cms:show gg_image />" class="img-wrap">
						<img src="<cms:show gg_image />" id="img-<cms:show k_page_id />" onload="getExif('img-<cms:show k_page_id />')" />
						<div class="description description--grid"><p class="imgtitle"><cms:show image_title/></p>
						<div class="details">
								<ul>
									<li><i class="icon icon-camera"></i><span><cms:show image_camera/></span></li>
									<li><i class="icon icon-focal_length"></i><span><cms:show image_focal/></span></li>
									<li><i class="icon icon-aperture"></i><span><cms:show image_aperture/></span></li>
									<li><i class="icon icon-exposure_time"></i><span><cms:show image_exposure/></span></li>
									<li><i class="icon icon-iso"></i><span><cms:show image_iso/></span></li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
		<!-- /content -->
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
	<script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
	<script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/retina.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/flickity.pkgd.min.js"></script>
	<script src="js/min/scripts-min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main2.js"></script>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : 1,
					y : -0.75
				},
				pagemargin : 50,
				onOpenItem : function(instance, item) {
					var win = {width: window.innerWidth, height: window.innerHeight};
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 150);
								el.style.WebkitTransition = 'opacity .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1), -webkit-transform .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
								el.style.transition = 'opacity .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1), transform .6s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
							
								el.style.WebkitTransform = 'translate3d(-' + win.width + 'px,0,0)';
								el.style.transform = 'translate3d(-' + win.width + 'px,0,0)';
								el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 150);
							el.style.WebkitTransition = 'opacity .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1), -webkit-transform .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';
							el.style.transition = 'opacity .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1), transform .3s ' + delay + 'ms cubic-bezier(.5,1,.2,1)';


							el.style.WebkitTransform = 'translate3d(0,0,0)';
							el.style.transform = 'translate3d(0,0,0)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
</body>

</html>
<cms:else />
	<cms:embed 'gridtestd5.html' />
</cms:if>
<?php COUCH::invoke(); ?>