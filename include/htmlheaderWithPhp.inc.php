	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  <?php $docroot = "";//$_SERVER['DOCUMENT_ROOT'];
		echo "<link rel=\"stylesheet\" href=\"$docroot/stylesheets/base.css\">\n";
		echo "<link rel=\"stylesheet\" href=\"$docroot/stylesheets/skeleton.css\">\n";
		echo "<link rel=\"stylesheet\" href=\"$docroot/stylesheets/layout.css\">\n";
		echo "<link rel=\"stylesheet\" href=\"$docroot/stylesheets/nygc.css\">\n";

		echo '<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->';
	echo "<link rel=\"shortcut icon\" href=\"$docroot/images/favicon.ico\">\n";
	echo "<link rel=\"apple-touch-icon\" href=\"$docroot/images/apple-touch-icon.png\">\n";
	echo "<link rel=\"apple-touch-icon\" sizes=\"72x72\ href=\"images/apple-touch-icon-72x72.png\">\n";
	echo "<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">\n";

		?>