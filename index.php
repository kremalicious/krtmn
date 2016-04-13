<?php 
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

// Change this to match the URL of your public interface. Something like: http://your-own-domain-here.com/index.php
$page = YOURLS_SITE . '/index.php' ;

$items = yourls_api_stats( 'last', 1 );

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>krt.mn</title>
	<meta name="description" content="personal url shortener of web &amp; ui designer matthias kretschmann">
	
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="user/css/h5bp.css">
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="user/css/krtmn.css">
	
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
	<link rel="shortcut icon" href="/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="/favicon.ico">

</head>
<body id="public">

	<header>
		<h1><i class="icon-bookmark"></i><a href="/admin">krt.mn</a></h1>
	</header>
	<article role="main">
		<?php foreach( $items['links'] as $item ) { ?>
			<p>Latest short url: <a href="<?php echo $item['shorturl']; ?>"><?php echo $item['shorturl']; ?> <span class="title"><?php echo $item['title']; ?></span></a></p>
		<?php } ?>
		
	</article>
	<footer>
		
			<p><small>personal url shortener of web &amp; ui designer <a href="http://mkretschmann.com">matthias kretschmann</a>. You should follow me on <a href="http://twitter.com/kremalicious">twitter</a>.</small></p>
			<p><small>icon font <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a></small></p>
		
	</footer>

	<script>
	    var _gaq=[['_setAccount','UA-1441794-9'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
  
</body>
</html>