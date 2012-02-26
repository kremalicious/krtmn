<?php 
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

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
	<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="user/css/krtmn.css">

</head>
<body>

	<header>
		<h1>krt.mn</h1>
	</header>
	<article role="main">
		<?php foreach( $items['links'] as $item ) { ?>
			<p>Latest shortened link: <a href="<?php echo $item['shorturl']; ?>"><?php echo $item['title']; ?> | <?php echo $item['shorturl']; ?></a></p>
		<?php } ?>
		
	</article>
	<footer>
		<small>personal url shortener of web &amp; ui designer <a href="http://mkretschmann.com">matthias kretschmann</a>. You should follow me on <a href="http://twitter.com/kremalicious">twitter</a>.</small>
	</footer>

	<script>
	    var _gaq=[['_setAccount','UA-1441794-9'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
  
</body>
</html>