<?php

declare(strict_types=1);

namespace AuthModule\Handler;

use Psr\Container\ContainerInterface;

class RegisterHandlerFactory
{
    public function __invoke(ContainerInterface $container) : RegisterHandler
    {
        return new RegisterHandler();
    }
}
