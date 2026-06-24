<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockVideo
 *
 * @link https://core.telegram.org/bots/api#richblockvideo
 */
class RichBlockVideo extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'video' => \Longman\TelegramBot\Entities\Video::class,
        ];
    }
}
