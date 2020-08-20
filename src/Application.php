<?php declare(strict_types=1);
namespace App;
use PN\Yaf\BaseApplication;
use PN\Yaf\Routing\RouteSet;

class Application extends BaseApplication
{
  public function __construct()
  {
    parent::__construct(dirname(__DIR__));

    $this->dc->provides(RouteSet::class, Routes::class);
  }
}
