<?php

namespace PhALDan\Discourse\Client;

use PhALDan\Discourse\Client\Rest\Categories;
use PhALDan\Discourse\Client\Rest\CategoryAsync;

/**
 * @author Philipp Daniels <philipp.daniels@gmail.com>
 */
class RestAsync
{
    use RestAdminAsync;
    use RestPostAsync;
    use RestUserAsync;

    /**
     * @var Http
     */
    private $http;

    public function __construct(Http $http)
    {
        $this->http = $http;
    }

    /**
     * Access REST API endpoints for categories.
     *
     * @return CategoryAsync
     */
    public function category(): CategoryAsync
    {
        return new Categories($this->http);
    }
}
