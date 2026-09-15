<?php
$_SERVER['CI_ENVIRONMENT'] = 'development';

define('WRITEPATH', '/tmp/');

// Force-create temporary runtime directories in Vercel
@mkdir('/tmp/cache', 0777, true);
@mkdir('/tmp/logs', 0777, true);
@mkdir('/tmp/uploads', 0777, true);

// Bypass public rewrite rules and boot app directly
require __DIR__ . '/../public/index.php';
