<?php

declare(strict_types = 1);

namespace Middlewares\Tests;

use Middlewares\ContentLength;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\Factory;
use PHPUnit\Framework\TestCase;

class ContentLengthTest extends TestCase
{
    public function testWithoutContentLength(): void
    {
        $response = Dispatcher::run([
            new ContentLength(),
            function () {
                return 'Hello';
            },
        ]);

        $this->assertSame('5', $response->getHeaderLine('Content-Length'));
    }

    public function testWithContentLength(): void
    {
        $response = Dispatcher::run([
            new ContentLength(),
            function () {
                return Factory::createResponse()->withHeader('Content-Length', '12');
            },
        ]);

        $this->assertSame('12', $response->getHeaderLine('Content-Length'));
    }

    public function testEmptyContentLength(): void
    {
        $response = Dispatcher::run([
            new ContentLength(),
        ]);

        $this->assertSame('0', $response->getHeaderLine('Content-Length'));
    }

    public function testNullContentLength(): void
    {
        $response = Dispatcher::run([
            new ContentLength(),
            function () {
                $response = Factory::createResponse();
                $response->getBody()->detach();

                return $response;
            },
        ]);

        $this->assertFalse($response->hasHeader('Content-Length'));
    }
}
