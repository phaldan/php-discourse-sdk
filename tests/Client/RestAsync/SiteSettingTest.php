<?php

namespace PhALDan\Discourse\Client\RestAsync;

/**
 * @author Philipp Daniels <philipp.daniels@gmail.com>
 * @covers \PhALDan\Discourse\Client\RestAsync\SiteSetting
 */
class SiteSettingTest extends HttpTestCase
{
    /**
     * @var SiteSetting
     */
    private $target;

    protected function setUp(): void
    {
        parent::setUp();
        $this->target = new SiteSetting(self::URL, $this->http);
    }

    /**
     * @test
     */
    public function successUpdate(): void
    {
        $attribute = ['title' => 'My fancy board'];
        $this->assertNull($this->target->update('title', $attribute)->wait());
        $this->assertHttpPut(sprintf(RouteConstants::SITE_SETTING_SET, 'title'), $attribute);
    }
}
