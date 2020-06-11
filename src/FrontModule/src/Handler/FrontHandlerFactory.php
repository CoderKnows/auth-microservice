<?php

declare(strict_types=1);

namespace FrontModule\Handler;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class FrontHandlerFactory
{
    public function __invoke(ContainerInterface $container) : FrontHandler
    {
        $renderer = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new FrontHandler($renderer);
    }
}
