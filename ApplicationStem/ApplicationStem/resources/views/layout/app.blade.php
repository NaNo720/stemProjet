<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>@yield('title') - Projet Application</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

    <!--css Personnalisée
    <link rel="stylesheet" href="/frontend/css/mycss.css" type="text/css"> -->

	<!-- css files -->
	<link rel="stylesheet" href="/frontend/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="/frontend/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1>@yield('title')</h1>
		<!-- //title -->

        @yield('content')


		<!-- copyright -->
		<div class="copyright">
			<h2>© 2024 STELab. Tous droits réservés| Design par
				<a href="#" target="_blank">MbayeManga</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>

</html>
