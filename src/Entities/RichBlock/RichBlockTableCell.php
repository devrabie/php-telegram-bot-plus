<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockTableCell
 *
 * @link https://core.telegram.org/bots/api#richblocktablecell
 */
class RichBlockTableCell extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => \Longman\TelegramBot\Entities\RichText\RichText::class,
        ];
    }
}
