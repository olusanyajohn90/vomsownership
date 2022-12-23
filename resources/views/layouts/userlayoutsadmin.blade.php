<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>VOMS</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{  asset('public/frontend/content/carwash3/images/favicon.ico')  }}">
	<!-- FONTS -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inter:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{  asset('public/frontend/css/bootstrap.min.css')  }}">
	<!--CSS -->
	<link rel='stylesheet' href="{{  asset('public/frontend/content/lottie/css/structure.css')  }}">
	<link rel='stylesheet' href="{{  asset('public/frontend/content/lottie/css/lottie.css')  }}">
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="{{  asset('public/frontend/plugins/rs-plugin-6.custom/css/rs6.css')  }}"> </head>

<body class="home page content-brightness-light input-brightness-light style-simple button-custom layout-full-width if-modern-overlay no-content-padding no-shadows header-transparent sticky-header sticky-tb-color ab-hide subheader-both-center menu-line-below-80-1 menuo-right menuo-no-borders logo-no-margin mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss tr-content be-page-8">


    @yield('content')
	<!-- JS -->
	<script src="{{  asset('public/frontend/js/jquery-3.6.0.min.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/jquery-migrate-3.3.2.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/mfn.menu.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/jquery.plugins.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/jquery.jplayer.min.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/animations/animations.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/translate3d.js')  }}"></script>
	<script src="{{  asset('public/frontend/js/scripts.js')  }}"></script>
	<script src="{{  asset('public/frontend/plugins/rs-plugin-6.custom/js/revolution.tools.min.js')  }}"></script>
	<script src="{{  asset('public/frontend/plugins/rs-plugin-6.custom/js/rs6.min.js')  }}"></script>
	<script src="{{  asset('public/frontend/phpmailer/form.js')  }}"></script>
	<script type="text/javascript">
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1400,1400,778,778",
					gridheight: "950,950,1100,1100",
					spinner: "spinner12",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#13d5ff",
					editorheight: "950,768,1100,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	} // End of RevInitScript
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>
</body>

</html>
