<?php

namespace OffbeatWP\Cache\Repositories;

class TransientRepository
{

    public function setCache($transient, $value, $expiration = 0)
    {
        set_transient($transient, $value, $expiration);
    }

    public function getCache($transient)
    {
        return get_transient($transient);
    }

    public function deleteCache($transient)
    {
        return delete_transient($transient);
    }


}