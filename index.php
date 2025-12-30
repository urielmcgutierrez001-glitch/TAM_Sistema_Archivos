<?php
// Diagnostic: confirm this root index is being served and show PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "ROOT INDEX: reached\n";

if (file_exists(__DIR__ . '/public/index.php')) {
	require __DIR__ . '/public/index.php';
} else {
	echo 'Index not found.';
}
