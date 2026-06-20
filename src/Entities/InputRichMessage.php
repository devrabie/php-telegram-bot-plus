<?php

namespace Longman\TelegramBot\Entities;

use Longman\TelegramBot\Entities\RichBlock\RichBlock;

/**
 * Class InputRichMessage
 *
 * @link https://core.telegram.org/bots/api#inputrichmessage
 *
 * @method RichBlock[] getBlocks() Array of blocks forming the message
 */
class InputRichMessage extends Entity
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
