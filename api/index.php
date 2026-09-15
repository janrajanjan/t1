<?php
$_SERVER['CI_ENVIRONMENT'] = 'development';

define('WRITEPATH', '/tmp/');

if (!is_dir('/tmp/cache')) {
    @mkdir('/tmp/cache', 0777, true);
}
if (!is_dir('/tmp/logs')) {
    @mkdir('/tmp/logs', 0777, true);
}

require __DIR__ . '/../public/index.php';
