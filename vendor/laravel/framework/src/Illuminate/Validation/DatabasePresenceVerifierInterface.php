<?php
/**
 * Illuminate，验证，数据库状态验证器接口
 */

namespace Illuminate\Validation;

interface DatabasePresenceVerifierInterface extends PresenceVerifierInterface
{
    /**
     * Set the connection to be used.
     *
     * @param  string  $connection
     * @return void
     */
    public function setConnection($connection);
}
