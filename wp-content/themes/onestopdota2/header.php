<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="" type="image/x-icon" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head();?>
</head>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<body class="theme bg-dark-brown" <?php body_class(); ?>>
	<header class="header-shell position-fixed w-100 left top theme box-shadow-low-black-opa z-index-5">
		<nav class="navbar px-4 py-3 px-lg-5 w-100 z-index-2 position-absolute theme bg-transparent">
			<a class="navbar-brand m-0 p-0 position-relative z-index-2" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_theme_mod('white_logo_url'); ?>" class="site-logo white-logo d-block" />
			</a>

			<div class="menu-holder d-flex">
				<div class="primary-menu z-index-1 d-none d-lg-flex align-self-center mr-5 pr-5">
					<?php
						if (has_nav_menu('primary_header')) {
							wp_nav_menu(array(
								'theme_location' => 'primary_header',
								'container' => false,
								'menu_class' => 'menu-section flex-row navbar-nav ml-auto h-100 justify-content-lg-center theme bg-transparent',
								)
							);
						}
				   ?>
				</div>

				<button class="menu outline-none collapsed position-relative mr-1 pr-0 mr-sm-4 pr-sm-2 pr-lg-0 mr-lg-2 z-index-4" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" data-toggle="collapse" data-target="#navbarSupportedContent" aria-label="Main Menu Toggle navigation" aria-controls="navbarSupportedContent" aria-expanded="false">
			     	<svg width="30" height="30" viewBox="0 0 100 100">
			        	<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
			        	<path class="line line2" d="M 20,50 H 80" />
			        	<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
			      	</svg>
			    </button>

			    <div class="collapse mobile-menu text-center z-index-3 position-absolute w-100 h-100 left top theme bg-dark-brown pl-3 pl-sm-5 h-m100vh" id="navbarSupportedContent">
					<?php
						if (has_nav_menu('primary_header')) {
							wp_nav_menu(array(
								'theme_location' => 'primary_header',
								'container' => false,
								'menu_class' => 'mobile-menu-section mx-auto navbar-nav ml-auto h-100 pl-5 justify-content-center theme color-white',
								)
							);
						}
				   ?>
				</div>
			</div>
		</nav>
	</header>

	<!-- <div id="home_url" data-url="<?php echo get_template_directory_uri();?>"></div> -->
