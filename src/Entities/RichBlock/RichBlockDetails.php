<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockDetails
 *
 * @link https://core.telegram.org/bots/api#richblockdetails
 */
class RichBlockDetails extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'blocks' => [RichBlock::class],
            'summary' => \Longman\TelegramBot\Entities\RichText\RichText::class,
        ];
    }
}
