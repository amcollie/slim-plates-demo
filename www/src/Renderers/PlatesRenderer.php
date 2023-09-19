<?php

declare(strict_types= 1);

namespace App\Renderers;

use League\Plates\Engine as PlatesEngine;
use Psr\Http\Message\ResponseInterface;

final class PlatesRenderer
{
    public function __construct(private PlatesEngine $engine)
    {

    }

    public function render(ResponseInterface $response, string $template, array $data = []): ResponseInterface
    {
        $content = $this->engine->render($template, $data);
        $response->getBody()->write($content);

        return $response
            ->withHeader('Content-Type', 'text/html; charset=utf-8');
    }
}