<?php

namespace OffbeatWP\Cache;

use OffbeatWP\Cache\Repositories\CacheRepository;
use OffbeatWP\Contracts\SiteSettings;
use OffbeatWP\Services\AbstractService;

class Service extends AbstractService
{

    public $binding = [
        CacheRepository::class => CacheRepository::class
    ];

    protected $settings;

    public function register(SiteSettings $settings)
    {

    }

}