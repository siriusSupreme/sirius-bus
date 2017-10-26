<?php

namespace Sirius\Bus\Traits;

use Sirius\Bus\Dispatcher;
use Sirius\Container\Container;

trait DispatchesJobs
{
    /**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    protected function dispatch($job)
    {
        return Container::getInstance()->make(Dispatcher::class)->dispatch($job);
    }

    /**
     * Dispatch a job to its appropriate handler in the current process.
     *
     * @param  mixed  $job
     * @return mixed
     */
    public function dispatchNow($job)
    {
        return Container::getInstance()->make(Dispatcher::class)->dispatchNow($job);
    }
}
