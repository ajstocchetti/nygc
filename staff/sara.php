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
<div class="staffname">Sara Baker</div>
<div class="staffposition">Senior Communications Strategist</div>
<img src="/images/headshots/Sara.jpg" class="staffimg" />
<p>Sara Jane Baker joined the New York Grant Company in 2013 as a Senior Communications Strategist. A dynamic global public relations professional, Sara brings a passion for connecting people, telling great stories, and an infectious enthusiasm for her clients.</p>
<p>Previously, Sara was the Senior Media Relations Manager for a financial information company in New York, where she managed media relations at the national level, planned and executed events, and developed brand management strategy.</p>
<p>In addition to her work at the New York Grant Company, Sara runs a style website for women and is a contributing blogger at The Huffington Post. She has a B.A. in Communications from Elon University.</p>
<img src="/images/headshots/Sara_small.jpg" class="staffimgsmall" />
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