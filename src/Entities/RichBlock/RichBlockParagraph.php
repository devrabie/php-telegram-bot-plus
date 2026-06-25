<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockParagraph
 *
 * @link https://core.telegram.org/bots/api#richblockparagraph
 */
class RichBlockParagraph extends RichBlock
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
