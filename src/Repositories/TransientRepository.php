<?php

namespace OffbeatWP\Cache\Repositories;

class TransientRepository
{

    public function setTransient($transient, $value, $expiration = 0)
    {
        set_transient($transient, $value, $expiration);
    }

    public function getTransient($transient)
    {
        return get_transient($transient);
    }

    public function deleteTransient($transient)
    {
        return delete_transient($transient);
    }


}