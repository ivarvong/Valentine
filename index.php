<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>A valentine for you!</title>
	<meta name="description" content="Draw people pictures for Valentine's Day!">
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
	
	<meta property="og:title" content="DIY Valentine" />
	<meta property="og:description" content="Draw people pictures for Valentine's Day!" />
	<meta property="og:image" content="http://ivarvong.com/valentine/teaser.png" />
	<meta property="og:url" content="http://ivarvong.com/valentine/" />
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/libs/modernizr-2.5.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">

	<div id="canvas-wrapper" style="width: 800px; height: 600px; border: 2px solid #CCC">
		<canvas id="canvas" width="800" height="600">No canvas, sorry.</canvas>
	</div>

	<div id="nav">
		<div id="reset" class="nav-item"><a href="/valentine"><h2>Make a new one!</h2></a></div>
		<div id="save" style="display: none; cursor:pointer" class="nav-item"><h2>Save this one!</h2></div>	
		<div id="facebook-wrapper" class="nav-item"></div>
		<div style="clear:both" />
	</div>
	
	<div id="infowrapper" style="margin-left: 10px; color:#444;">
		<p>Click and drag with your mouse to draw. When you're done, hit save. You can copy-paste the link, or use the Facebook share button.</p>
	</div>
	
	<div id="like-wrapper" style="margin-left: 10px">	
		<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fivarvong.com%2Fvalentine%2F&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80&amp;appId=201717029854731" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
	</div>
	
  </div>
  
  <footer>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>

  <script>
    var _gaq=[['_setAccount','UA-7098925-6'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>