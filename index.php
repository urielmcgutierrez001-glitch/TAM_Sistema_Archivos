<?php
// Diagnostic: confirm this root index is being served
echo "ROOT INDEX: reached\n";
// flush output so the platform logs/response show this immediately
if (function_exists('fastcgi_finish_request')) { @fastcgi_finish_request(); }

if (file_exists(__DIR__ . '/public/index.php')) {
	require __DIR__ . '/public/index.php';
} else {
	echo 'Index not found.';
}
