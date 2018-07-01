<?php require_once 'include/session_auth.php';?>
<!doctype html>
<html lang="en">
<head>
    <title>Esteban es un Co&#241o - Chile Artists</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="css/side-menu.css">
	<script>
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	    ga('create', 'UA-41480445-1', 'purecss.io');
	    ga('send', 'pageview');
	</script>
</head>
<body>
<div id="layout">
	<!-- Menu toggle -->
	<a href="#menu" id="menuLink" class="menu-link">
		<span></span>
	</a>

	<div id="menu">
		<div class="pure-menu">
			<a class="pure-menu-heading" href="#">S.A.C</a>
			<ul class="pure-menu-list">
				<li class="pure-menu-item"><a href="/" class="pure-menu-link">Home</a></li>
				<li class="pure-menu-item"><a href="Account" class="pure-menu-link">Account</a></li>
				<li class="pure-menu-item"><a href="Wiki" class="pure-menu-link">Wiki</a></li>
				<li class="pure-menu-item"><a href="Contact" class="pure-menu-link">Contact</a></li>
				<li class="pure-menu-item"><a href="login.php" class="pure-menu-link">Login</a></li>
				<li class="pure-menu-item"><a href="logout.php" class="pure-menu-link">Logout</a></li>
				<li class="pure-menu-item"><a href="register.php" class="pure-menu-link">Register</a></li>
			</ul>
		</div>
	</div>

	<div id="main">
		<div class="header">
			<h1>S.A.C</h1>
			<h2>Welcome to gambling, idiots.</h2>
		</div>

		<div class="content">
			<div class="pure-g" style="text-align:center;">
				<div class="pure-u-1">
					<img class="pure-img-responsive" src="images/running.gif" alt="Running man">
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/ui.js"></script>

</body>
</html>
