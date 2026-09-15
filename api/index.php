<?php
$_SERVER['CI_ENVIRONMENT'] = 'development';

// Define writable path to /tmp and create necessary cache directories
define('WRITEPATH', '/tmp/');
if (!is_dir('/tmp/cache')) {
    @mkdir('/tmp/cache', 0777, true);
}

require __DIR__ . '/../public/index.php';
