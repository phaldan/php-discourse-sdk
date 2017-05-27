<?php

namespace PhALDan\Discourse\Client\Rest;

/**
 * @author Philipp Daniels <philipp.daniels@gmail.com>
 * @covers \PhALDan\Discourse\Client\Rest\Plugins
 */
class PluginsTest extends HttpTestCase
{
    /**
     * @var Plugins
     */
    private $target;

    protected function setUp(): void
    {
        parent::setUp();
        $this->target = new Plugins($this->http);
    }

    /**
     * @test
     */
    public function successList(): void
    {
        $this->assertNull($this->target->list()->wait());
        $this->assertHttpGet(RouteConstants::PLUGIN_LIST);
    }
}
