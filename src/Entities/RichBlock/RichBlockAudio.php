<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockAudio
 *
 * @link https://core.telegram.org/bots/api#richblockaudio
 */
class RichBlockAudio extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'audio' => \Longman\TelegramBot\Entities\Audio::class,
        ];
    }
}
