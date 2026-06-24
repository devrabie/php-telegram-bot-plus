<?php

namespace Longman\TelegramBot\Entities;

use Longman\TelegramBot\Entities\RichBlock\RichBlock;

/**
 * Class RichMessage
 *
 * @link https://core.telegram.org/bots/api#richmessage
 *
 * @method RichBlock[] getBlocks() Array of blocks forming the message
 */
class RichMessage extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'blocks' => [RichBlock::class],
        ];
    }
}
