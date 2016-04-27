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

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php yourls_site_url(); ?>/user/css/h5bp.css">
	<link rel="stylesheet" href="<?php yourls_site_url(); ?>/user/css/krtmn.css">
    <link rel="stylesheet" href="<?php yourls_site_url(); ?>/user/css/public.css">

	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php yourls_site_url(); ?>/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php yourls_site_url(); ?>/apple-touch-icon-72x72-precomposed.png">
	<link rel="shortcut icon" href="<?php yourls_site_url(); ?>/apple-touch-icon-precomposed.png">
	<link rel="shortcut icon" href="<?php yourls_site_url(); ?>/favicon.ico">

</head>

<body id="public">

    <article class="content">
        <header>
    		<h1><i class="icon-bookmark"></i><a href="<?php yourls_site_url(); ?>/admin">krt.mn</a></h1>
    	</header>
    	<main role="main">
    		<?php foreach( $items['links'] as $item ) { ?>
    			<p>Latest short url: <a href="<?php echo $item['shorturl']; ?>"><?php echo $item['shorturl']; ?> <span class="title"><?php echo $item['title']; ?></span></a></p>
    		<?php } ?>
    	</main>
    	<footer>
			<p><small>personal url shortener of designer &amp; developer <a href="https://matthiaskretschmann.com">matthias kretschmann</a>. You should follow me on <a href="https://twitter.com/kremalicious">twitter</a>.</small></p>
    	</footer>
    </article>

    <!-- Piwik -->
    <script>
        var _paq = _paq || [];
        _paq.push(["setDomains", ["*.krt.mn"]]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.kremalicious.com/";
            _paq.push(['setTrackerUrl', u+'piwik.php']);
            _paq.push(['setSiteId', 5]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//analytics.kremalicious.com/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

	<script>
	    var _gaq=[['_setAccount','UA-1441794-9'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

</body>
</html>
