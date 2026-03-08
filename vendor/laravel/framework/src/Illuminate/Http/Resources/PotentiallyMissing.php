<?php
/**
 * Illuminate，Http，资源，可能会丢失
 */

namespace Illuminate\Http\Resources;

interface PotentiallyMissing
{
    /**
     * Determine if the object should be considered "missing".
     *
     * @return bool
     */
    public function isMissing();
}
