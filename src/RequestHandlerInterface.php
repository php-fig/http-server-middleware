<?php

namespace Interop\Http\Server;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * An HTTP request handler process a HTTP request and produces an HTTP response.
 * This interface defines the methods require to use the request handler.
 */
interface RequestHandlerInterface
{
    /**
     * Handle the request and return a response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request);
}
