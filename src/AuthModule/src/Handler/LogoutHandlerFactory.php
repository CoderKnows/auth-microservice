<?php

declare(strict_types=1);

namespace AuthModule\Handler;

use Psr\Container\ContainerInterface;

class LogoutHandlerFactory
{
    public function __invoke(ContainerInterface $container) : LogoutHandler
    {
        return new LogoutHandler();
    }
}
