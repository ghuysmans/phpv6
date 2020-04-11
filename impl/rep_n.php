<?php
function have_same_subnet($theirs, $ours, $prefix) {
	$mask = str_repeat("\xff", $prefix >> 3);
	if ($prefix & 7)
		$mask .= chr(0xff << (8 - $prefix & 7) & 0xff);
	return (inet_pton($ours) & $mask) == (inet_pton($theirs) & $mask);
}
