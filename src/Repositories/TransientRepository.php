<?php

namespace OffbeatWP\Cache\Repositories;

class TransientRepository
{

    public function setCache($key, $value, $expiration = 0)
    {
        set_transient($key, $value, $expiration);
    }

    public function getCache($key)
    {
        return get_transient($key);
    }

    public function deleteCache($key)
    {
        return delete_transient($key);
    }


}