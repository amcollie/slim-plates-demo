<?php

declare(strict_types= 1);

use App\Action\Home\HomeAction;
use Slim\App;

return function (App $app) {
    $app->get('/', HomeAction::class);
};