<?php
/**
 * Illuminate，基础，测试，没有中间件
 */

namespace Illuminate\Foundation\Testing;

use Exception;

trait WithoutMiddleware
{
    /**
     * Prevent all middleware from being executed for this test class.
     *
     * @throws \Exception
     */
    public function disableMiddlewareForAllTests()
    {
        if (method_exists($this, 'withoutMiddleware')) {
            $this->withoutMiddleware();
        } else {
            throw new Exception('Unable to disable middleware. MakesHttpRequests trait not used.');
        }
    }
}
