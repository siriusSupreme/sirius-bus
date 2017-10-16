<?php

namespace Sirius\Bus\Traits;

use Sirius\Bus\PendingChain;
use Sirius\Bus\PendingDispatch;

trait Dispatchable
{
    /**
     * Dispatch the job with the given arguments.
     *
     * @return \Sirius\Bus\PendingDispatch
     */
    public static function dispatch()
    {
        return new PendingDispatch(new static(...func_get_args()));
    }

    /**
     * Set the jobs that should run if this job is successful.
     *
     * @param  array  $chain
     * @return \Sirius\Bus\PendingChain
     */
    public static function withChain($chain)
    {
        return new PendingChain(get_called_class(), $chain);
    }
}
