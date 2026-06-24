<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockMap
 *
 * @link https://core.telegram.org/bots/api#richblockmap
 */
class RichBlockMap extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'location' => \Longman\TelegramBot\Entities\Location::class,
        ];
    }
}
