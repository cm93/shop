<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo CSS; ?>flipclock.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="<?php echo JS; ?>flipclock.js"></script>		
	</head>
	<body>
		<div class="clock" style="margin:2em;"></div>

		<script type="text/javascript">
			var clock;
			
			$(document).ready(function() {
				clock = $('.clock').FlipClock({
					clockFace: 'TwentyFourHourClock'
				});
			});
		</script>
		
	</body>
</html>