<?php
function have_same_subnet($theirs, $ours, $prefix) {
	$ours = inet_pton($ours);
	$theirs = inet_pton($theirs);
	$mask = str_repeat("\xff", $prefix >> 3);
	if ($prefix & 7)
		$mask .= chr(0xff << (8 - $prefix & 7) & 0xff);
	return ($ours & $mask) == ($theirs & $mask);
}
