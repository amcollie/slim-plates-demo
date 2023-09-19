<?php

declare(strict_types=1);

namespace App\Action\Home;

use App\Renderers\PlatesRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class HomeAction
{
    public function __construct(private PlatesRenderer $renderer)
    {
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface
    {
        $viewData = [
            'name' => 'Tom',
        ];

        return $this->renderer->render($response, 'home', $viewData);
    }
}