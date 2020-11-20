<?php

namespace OffbeatWP\Cache\Repositories;

abstract class AbstractCacheRepository
{

    abstract function setCache($key, $value, $expiration = 0);
    abstract function getCache($key);
    abstract function deleteCache($key);

}