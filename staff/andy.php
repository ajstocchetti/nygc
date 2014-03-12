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
<div class="staffname">Andy Stocchetti</div>
<div class="staffposition">Sustainable Incentives Specialist</div>
<img src="/images/headshots/Andy.jpg" class="staffimg" />
<p>Andy joined the New York Grant Company in 2013 as a member of the green incentives and green compliance team. With a plethora of technical knowledge and experience with sustainability measures, Andy uses his expertise to investigate new incentives for sustainable upgrades. He also assists in the filing of these applications.</p>
<p>Andy holds a B.S. in Civil Engineering and a M.S. in Civil &amp; Environmental Engineering with a concentration in sustainable design, both from Carnegie Mellon University. He is a LEED Accredited Professional (LEED AP-BD&amp;C) and holds two Permaculture Design Certifications.</p>
<img src="/images/headshots/Andy_small.jpg" class="staffimgsmall" />
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