<?php

namespace Longman\TelegramBot\Entities\InputMessageContent;

use Longman\TelegramBot\Entities\Entity;
use Longman\TelegramBot\Entities\RichBlock\RichBlock;

/**
 * Class InputRichMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputrichmessagecontent
 *
 * @method RichBlock[] getBlocks() Array of blocks forming the message
 */
class InputRichMessageContent extends Entity implements InputMessageContent
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
