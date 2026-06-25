<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockSectionHeading
 *
 * @link https://core.telegram.org/bots/api#richblocksectionheading
 */
class RichBlockSectionHeading extends RichBlock
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
