<?php
declare(strict_types = 1);

namespace Middlewares;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ContentLength implements MiddlewareInterface
{
    /**
     * Process a request and return a response.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);

        if ($response->hasHeader('Content-Length')) {
            return $response;
        }

        $size = $response->getBody()->getSize();

        if ($size === null) {
            return $response;
        }

        return $response->withHeader('Content-Length', (string) $size);
    }
}
