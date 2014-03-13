<?php include($_SERVER['DOCUMENT_ROOT'].'/include/doctype.inc.php'); ?>
<head>
<?php 	// all header info except for the title
	include($_SERVER['DOCUMENT_ROOT'].'/include/htmlheader.inc.php'); ?>

	<title>New York Grant Company</title>
</head>
<body class="Frame">
	<!-- Primary Page Layout
	================================================== -->
	<div class="Row Expand">
		<div class="container">
		
		<?php	// vertical navigation bar
			include($_SERVER['DOCUMENT_ROOT'].'/include/nav.inc.php'); ?>

		<div class="twelve columns offset-by-one content">
			<?php
				// social media links
				include($_SERVER['DOCUMENT_ROOT'].'/include/socialmedia.inc.php');
				// PAGE CONTENT GOES HERE
			?>
<div class="twelve columns staffbio">
<div class="staffname">Yolaine Poitevien</div>
<div class="staffposition">[title]</div>
<img src="/images/headshots/Yolaine.jpg" class="staffimg" />
<p>Yolaine...</p>
<img src="/images/headshots/Yolaine_small.jpg" class="staffimgsmall" />
</div>
	
		</div>
		</div><!-- end container -->
	</div><!-- end Row Expand -->

	<!-- footer -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.inc.php'); ?>
<!-- End Document
================================================== -->
</body>
</html>