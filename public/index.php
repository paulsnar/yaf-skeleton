<?php declare(strict_types=1);
namespace App;

if (PHP_SAPI === 'cli-server') {
  if (is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
  }
}

require dirname(__DIR__) . '/vendor/autoload.php';
(new Application())->run();
