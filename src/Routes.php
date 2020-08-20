<?php declare(strict_types=1);
namespace App;
use PN\Yaf\Routing\{RouteCollector, RouteSet};

class Routes implements RouteSet
{
  public function draw(RouteCollector $r): void
  {
    $r->alias([
      'index' => Controllers\IndexController::class,
    ]);

    $r->get('/', 'index#showFrontpage');
  }
}
