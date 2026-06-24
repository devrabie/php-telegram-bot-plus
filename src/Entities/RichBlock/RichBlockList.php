<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockList
 *
 * @link https://core.telegram.org/bots/api#richblocklist
 */
class RichBlockList extends RichBlock
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
