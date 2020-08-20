<?php declare(strict_types=1);
namespace App\Controllers;
use PN\Yaf\Http\{Request, Response};
use App\Views\Environment;

class IndexController
{
  private Environment $tpl;

  public function __construct(Environment $tpl)
  {
    $this->tpl = $tpl;
  }

  public function showFrontpage(Request $rq): Response
  {
    $name = $rq->query['name'] ?? 'World';
    return $this->tpl->renderResponse('index.html', [
      'name' => $name,
    ]);
  }
}
