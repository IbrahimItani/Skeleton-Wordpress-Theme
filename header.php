<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>sebastian palencia</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
	<link rel="shortcut icon" type="image/png" href="http://seabstn.com/wp-content/uploads/2016/08/favicon-1.png"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
	<script type='text/javascript' src='/js/jquery.mousewheel.min.js'></script>
	<script type='text/javascript' src='/js/scroll.js'></script>

</head>
<body>

<div class="header">
<a href="http://seabstn.com/"><b>SEABSTN</b></a>
<div class="links">
<a href="/index.php/about/">about</a>
</br>
<a href="http://gnarcist.tumblr.com/" target="_blank">life</a>
</br>


<?php $custom_query = new WP_Query('cat=-9'); // exclude category 9
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	    </br> 

<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



</div>

</div>