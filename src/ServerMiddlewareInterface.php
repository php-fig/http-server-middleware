<?php

namespace Psr\Http\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ServerMiddlewareInterface extends MiddlewareInterface
{
    /**
     * Process a server request and return a response.
     *
     * Takes the incoming request and optionally modifies it before delegating
     * to the next frame to get a response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $frame
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $frame);
}
