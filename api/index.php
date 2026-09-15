<?php
// Override CodeIgniter's writable directory path for Vercel Serverless
$_SERVER['CI_ENVIRONMENT'] = 'development';
define('WRITEPATH', '/tmp/');

require __DIR__ . '/../public/index.php';
