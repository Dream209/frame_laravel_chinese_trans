<?php
/**
 * Illuminate，基础，事件，语言环境更新
 */

namespace Illuminate\Foundation\Events;

class LocaleUpdated
{
    /**
     * The new locale.
     *
     * @var string
     */
    public $locale;

    /**
     * Create a new event instance.
     *
     * @param  string  $locale
     * @return void
     */
    public function __construct($locale)
    {
        $this->locale = $locale;
    }
}
