<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockBlockQuotation
 *
 * @link https://core.telegram.org/bots/api#richblockblockquotation
 */
class RichBlockBlockQuotation extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'credit' => \Longman\TelegramBot\Entities\RichText\RichText::class,
            'blocks' => [RichBlock::class],
        ];
    }
}
