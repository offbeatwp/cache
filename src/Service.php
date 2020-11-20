<?php

namespace OffbeatWP\Cache;

use OffbeatWP\Cache\Repositories\AbstractCacheRepository;
use OffbeatWP\Contracts\SiteSettings;
use OffbeatWP\Services\AbstractService;

class Service extends AbstractService
{

    public $binding = [
        AbstractCacheRepository::class => AbstractCacheRepository::class
    ];

    protected $settings;


}