<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockPullQuotation
 *
 * @link https://core.telegram.org/bots/api#richblockpullquotation
 */
class RichBlockPullQuotation extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => \Longman\TelegramBot\Entities\RichText\RichText::class,
            'credit' => \Longman\TelegramBot\Entities\RichText\RichText::class,
        ];
    }
}
