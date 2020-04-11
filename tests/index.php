<?php
require_once('cases.php');
require_once('../loader.php');

function fail() {
	global $failures;
	$bt = debug_backtrace(1);
	$failures[] = $bt[0];
}


$failures = array();
run();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<title>Unit tests</title>
</head>
<body>
<?php	if (count($failures)) { ?>
<p>Some tests have failed:</p>
<ul>
<?php		foreach ($failures as $f) { ?>
	<li><!--<b><?=$f['file']?></b> on-->line <b><?=$f['line']?></b></li>
<?php		} ?>
</ul>
<?php	} else { ?>
<p style="color: green">All tests have passed!</p>
<?php	} ?>
</body>
</html>
