<?php

namespace PhALDan\Discourse\Client\Rest;

use GuzzleHttp\Promise\PromiseInterface;

/**
 * @author Philipp Daniels <philipp.daniels@gmail.com>
 */
class SiteSettings extends HttpClient
{
    /**
     * Set a new value for a site setting.
     * More information on:
     *  - http://docs.discourse.org/#tag/Site-Settings-Backups
     *  - http://docs.discourse.org/#tag/Site-Settings-Basic-Setup
     *  - http://docs.discourse.org/#tag/Site-Settings-Developer
     *  - http://docs.discourse.org/#tag/Site-Settings-Email
     *  - http://docs.discourse.org/#tag/Site-Settings-Files
     *  - http://docs.discourse.org/#tag/Site-Settings-Legal
     *  - http://docs.discourse.org/#tag/Site-Settings-Login
     *  - http://docs.discourse.org/#tag/Site-Settings-Onebox
     *  - http://docs.discourse.org/#tag/Site-Settings-Other
     *  - http://docs.discourse.org/#tag/Site-Settings-Plugins
     *  - http://docs.discourse.org/#tag/Site-Settings-Posting
     *  - http://docs.discourse.org/#tag/Site-Settings-Rate-Limits
     *  - http://docs.discourse.org/#tag/Site-Settings-Required
     *  - http://docs.discourse.org/#tag/Site-Settings-Search
     *  - http://docs.discourse.org/#tag/Site-Settings-Security
     *  - http://docs.discourse.org/#tag/Site-Settings-Spam
     *  - http://docs.discourse.org/#tag/Site-Settings-Tags
     *  - http://docs.discourse.org/#tag/Site-Settings-Trust-Levels
     *  - http://docs.discourse.org/#tag/Site-Settings-User-API
     *  - http://docs.discourse.org/#tag/Site-Settings-User-Preferences
     *  - http://docs.discourse.org/#tag/Site-Settings-Users.
     *
     * @param string $setting
     * @param array  $attributes
     *
     * @return PromiseInterface
     */
    public function update(string $setting, array $attributes): PromiseInterface
    {
        $url = sprintf(RouteConstants::SITE_SETTINGS_SET, $setting);

        return $this->client()->put($url, $attributes);
    }
}
