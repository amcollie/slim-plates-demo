<?php

declare(strict_types=1);

use League\Plates\Engine as PlatesEngine;
use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Factory\AppFactory;

return [
    'settings' => fn () => require __DIR__ . '/settings.php',
    App::class => function (ContainerInterface $container): App {
        AppFactory::setContainer($container);

        return AppFactory::create();
    },
    PlatesEngine::class => function (ContainerInterface $container): PlatesEngine {
        $settings = $container->get('settings')['plates'];

        return new PlatesEngine($settings['path'], 'tpl');
    },
];