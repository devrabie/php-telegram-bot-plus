<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockThinking
 *
 * @link https://core.telegram.org/bots/api#richblockthinking
 */
class RichBlockThinking extends RichBlock
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
