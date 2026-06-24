<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockPhoto
 *
 * @link https://core.telegram.org/bots/api#richblockphoto
 */
class RichBlockPhoto extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'photo' => [\Longman\TelegramBot\Entities\PhotoSize::class],
        ];
    }
}
