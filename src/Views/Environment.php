<?php declare(strict_types=1);
namespace App\Views;
use PN\Yaf\Core\Configuration;
use PN\Yaf\Http\{Response, Status};
use Twig\Environment as TwigEnvironment;
use Twig\Loader\FilesystemLoader;
use function PN\Yaf\path_join;

class Environment
{
  private TwigEnvironment $twig;

  public function __construct(Configuration $config)
  {
    $root = $config->getRoot();
    $templates = path_join($root, 'views');
    $loader = new FilesystemLoader($templates);
    $this->twig = new TwigEnvironment($loader);
  }

  public function render(string $template, array $context = [ ]): string
  {
    return $this->twig->render($template, $context);
  }

  public function renderResponse(
    string $template,
    array $context = [ ],
    int $status = Status::OK,
    array $headers = [ ]
  ): Response {
    $body = $this->render($template, $context);
    $response = new Response($status, $headers, $body);
    if ($response->headers['Content-Type'] === null) {
      $response->headers['Content-Type'] = 'text/html; charset=UTF-8';
    }
    return $response;
  }
}
