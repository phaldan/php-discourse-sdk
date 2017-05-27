<?php

namespace PhALDan\Discourse\Client\Rest;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;
use PhALDan\Discourse\Client\Http;
use Psr\Http\Message\RequestInterface;

/**
 * @author Philipp Daniels <philipp.daniels@gmail.com>
 */
class HttpDummy implements Http
{
    public function send(RequestInterface $request): PromiseInterface
    {
        $promise = new Promise();
        $promise->resolve(null);

        return $promise;
    }
}
