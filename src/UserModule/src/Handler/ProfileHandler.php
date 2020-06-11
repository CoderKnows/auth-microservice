<?php

declare(strict_types=1);

namespace UserModule\Handler;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ProfileHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([
            'ack' => time(),
            'action' => self::class,
            'method' => $request->getMethod(),
            'profile' => [
                'name' => 'John Doe',
                'birthday' => '01.01.2000',
                'email' => 'john@doe.com',
                'mobile' => '+7 (999) 123 - 12 - 12',
            ],
        ]);
    }
}
