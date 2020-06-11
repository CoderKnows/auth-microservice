<?php

declare(strict_types=1);

namespace FrontModule\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use Mezzio\Template\TemplateRendererInterface;

class FrontHandler implements RequestHandlerInterface
{
    /**
     * @var TemplateRendererInterface | null
     */
    private ?TemplateRendererInterface $renderer;

    public function __construct(?TemplateRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // Do some work...
        // Render and return a response:
        return new HtmlResponse($this->renderer->render(
            'front::index',
            []
        ));
    }
}
