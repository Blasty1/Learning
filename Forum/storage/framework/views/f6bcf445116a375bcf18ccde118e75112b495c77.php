
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
				<li class="<?php echo e(Request::path() == 'index' ? 'current_page_item' : ''); ?>"><a href="/index" accesskey="1" title="">Homepage</a></li>
				<li class="<?php echo e(Request::path() == 'articles' ? 'current_page_item': ''); ?>"><a href="<?php echo e(route('all_articles')); ?>" accesskey="2" title="">Articles</a></li>
				<?php if(Auth::user()->User_permess== 'admin'): ?>
				<li class="<?php echo e(Request::path() == 'my_articles' ? 'current_page_item' : ''); ?>">
					<a href="/approve_article" accesskey="4" title="">Approve Articles</a></li>
				<?php endif; ?>
				<li class="<?php echo e(Request::path() == 'my_profile' ? 'current_page_item' : ''); ?>"><a href="/my_profile" accesskey="4" title="">My Profile</a></li>
				<!--  ci appare la scritta esci -->		
                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form></li>
			

				<!-- <li><a href="#" accesskey="5" title="">Contact Us</a></li> -->
			</ul>
		</div>
		<div id="logo">
			<h1>Forum di Programmazione</h1>
			<span>Design by <a href="#" rel="nofollow">BRYAN</a></span>
		</div>
		<?php endif; ?>
	</div>
<?php echo $__env->yieldContent('home_riquadro'); ?>
</div>
<?php echo $__env->yieldContent('content'); ?>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html><?php /**PATH /var/www/html/Learning/Forum/resources/views/layout.blade.php ENDPATH**/ ?>