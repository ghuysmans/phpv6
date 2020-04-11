<?php
function have_same_subnet($theirs, $ours, $prefix) {
	$ours = inet_pton($ours);
	$theirs = inet_pton($theirs);
	for ($i=0; $i<strlen($ours); $i++) {
		if (!$prefix)
			break; //done
		else if ($prefix >= 8) {
			$mask = 0xff;
			$prefix -= 8;
		}
		else {
			$mask = 0xff << (8 - $prefix);
			$prefix = 0;
		}
		if ((ord($ours[$i]) & $mask) != (ord($theirs[$i]) & $mask))
			return false;
	}
	return true;
}
