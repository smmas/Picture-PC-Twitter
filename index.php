<?php include('../../picturepc.inc'); ?>
<html>
<head>
<title>Twitter</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<?php load_jquery(); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#updates").load("update.php");
			setInterval('$("#updates").load("update.php")', 240000);
		});
	</script>
</head>
<body>
	<div id="updates"></div>
</body>
</html>