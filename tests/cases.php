<?php
function run() {
	have_same_subnet('127.0.0.1', '127.0.0.1', 8) || fail();
	have_same_subnet('127.0.0.2', '127.0.0.1', 8) || fail();
	have_same_subnet('192.168.0.2', '192.168.0.2', 24) || fail();
	!have_same_subnet('10.0.0.1', '192.168.0.1', 24) || fail();
	have_same_subnet('172.16.0.1', '172.31.0.2', 12) || fail();
	!have_same_subnet('172.16.0.1', '172.32.0.2', 12) || fail();
	have_same_subnet('::1', '::1', 128) || fail();
	!have_same_subnet('::2', '::1', 128) || fail();
}
