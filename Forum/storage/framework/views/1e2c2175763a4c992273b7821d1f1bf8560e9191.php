

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Polychromasia 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131021

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css' />
<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<!-- se ci troviamo nei file di registrazione o di login allora 
	il titolo e la parte superiore della pagina non verranno mostrate -->
<?php if(Request::path() != 'register' and Request::path() != 'login'): ?>:
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="menu">
			<ul>
				<li class="<?php echo e(Request::path() == '/' ? 'current_page_item' : ''); ?>"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li><a href="/login" accesskey="8" title="">Login</a></li>
				<li><a href="/register" accesskey="4" title="">Registrati</a></li>
				<li><a href="#contactus" accesskey="5" title="">Contattaci</a></li>
			</ul>
		</div>
		<div id="logo">
			<h1>L'inizio di una passione</h1>
			<span>Blog per veri<a href="#" rel="nofollow"> smanettoni</a></span>
		</div>
		<?php endif; ?>
	</div>

</div>

<div id="banner" class="container">
		<div class="heading">
			<h2>Registrati per visionare i contenuti</h2>
			<p>Ci vorranno pochi secondi, un email e una password, nulla di più semplice!</p>
			<a href="<?php echo e(route('register')); ?>" class="button">Registrati</a>
		</div>
	</div>

<div id="three-column" class="container">
	<div id="tbox1">
		<div class="title">
			<h2>Articolo example 1</h2>
		</div>
		<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin interdum.</p>
		<a href="#" class="button">Learn More</a> </div>
	<div id="tbox2">
		<div class="title">
			<h2>Article Example 2</h2>
		</div>
		<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna.</p>
		<a href="#" class="button">Learn More</a> </div>
	<div id="tbox3">
		<div class="title">
			<h2>Article example 3</h2>
		</div>
		<p>Donec mattis libero eget urna. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit semper eleifend.</p>
		<a href="#" class="button">Learn More</a> </div>
</div>
</div>
<br><br>
<div id="wrapper3">
	<div id="three-column" class="container">
			<div class="title">
				<h1>Relatori e Scrittori</h1>
			<span class="byline">Coloro che scrivono per il sito</span> </div>
		<div id="tbox1">
			<div class="box"> <a href="#"><img src="images/img03.jpg" alt="" class="image image-full" /></a>
				<h3>Vestibulum venenatis</h3>
				<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
			<a href="#" class="button">Learn More</a> </div>
		</div>
		<div id="tbox2">
			<div class="box"> <a href="#"><img src="images/img04.jpg" alt="" class="image image-full" /></a>
				<h3>Amministratore 2</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
			<a href="#" class="button">Learn More</a> </div>
		</div>
		<div id="tbox3">
			<div class="box"> <a href="#"><img src="images/img05.jpg" alt="" class="image image-full" /></a>
				<h3>Amministratore 3</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
			<a href="#" class="button">Learn More</a> </div>
		</div>
</div>
<div id="wrapper2">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>This is <strong>Polychromasia</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>		
	</div>
	<div id="newsletter" class="container" >
		<a name="contactus"></a>
		<div class="title">
			<h2>Newsletter Signup</h2>
			<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span> </div>
		<div class="content">
			<form method="post" action="#">
				<div class="row half">
					<div class="6u">
						<input type="text" class="text" name="name" placeholder="Name" />
					</div>
					<div class="6u">
						<input type="text" class="text" name="email" placeholder="Email" />
					</div>
				</div>
				<div class="row half">
					<div class="12u">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="12u"> <a href="#" class="button">Send Message</a> </div>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="wrapper4">
	<div id="footer" class="container">
		<div>
			<header class="title">
				<h2>Get in touch</h2>
				<span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span> </header>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
		</div>
	</div>
</div><div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
<?php /**PATH /var/www/html/Learning/Forum/resources/views/home.blade.php ENDPATH**/ ?>