<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockSlideshow
 *
 * @link https://core.telegram.org/bots/api#richblockslideshow
 */
class RichBlockSlideshow extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'blocks' => [RichBlock::class],
            'caption' => RichBlockCaption::class,
        ];
    }
}
