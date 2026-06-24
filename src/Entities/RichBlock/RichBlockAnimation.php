<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockAnimation
 *
 * @link https://core.telegram.org/bots/api#richblockanimation
 */
class RichBlockAnimation extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'animation' => \Longman\TelegramBot\Entities\Animation::class,
        ];
    }
}
