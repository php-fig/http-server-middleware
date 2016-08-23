<?php

namespace Psr\Http\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface MiddlewareInterface
{
    /**
     * Process a client request and return a response.
     *
     * Takes the incoming request and optionally modifies it before delegating
     * to the next frame to get a response.
     *
     * @param RequestInterface $request
     * @param DelegateInterface $next
     *
     * @return ResponseInterface
     */
    public function process(RequestInterface $request, DelegateInterface $next);
}
