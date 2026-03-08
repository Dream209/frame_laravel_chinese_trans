<?php
/**
 * Illuminate，通知，通知
 */

namespace Illuminate\Notifications;

use Illuminate\Queue\SerializesModels;

class Notification
{
    use SerializesModels;

    /**
     * The unique identifier for the notification.
	 * 通知的唯一标识符
     *
     * @var string
     */
    public $id;

    /**
     * The locale to be used when sending the notification.
     *
     * @var string|null
     */
    public $locale;

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    /**
     * Set the locale to send this notification in.
	 * 设置发送此通知的区域设置
     *
     * @param  string  $locale
     * @return $this
     */
    public function locale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}
