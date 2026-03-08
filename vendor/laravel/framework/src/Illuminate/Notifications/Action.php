<?php
/**
 * Illuminate，通知，动作
 */

namespace Illuminate\Notifications;

class Action
{
    /**
     * The action text.
	 * 动作文本
     *
     * @var string
     */
    public $text;

    /**
     * The action URL.
     *
     * @var string
     */
    public $url;

    /**
     * Create a new action instance.
     *
     * @param  string  $text
     * @param  string  $url
     * @return void
     */
    public function __construct($text, $url)
    {
        $this->url = $url;
        $this->text = $text;
    }
}
