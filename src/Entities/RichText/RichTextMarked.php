<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextMarked
 *
 * @link https://core.telegram.org/bots/api#richtextmarked
 */
class RichTextMarked extends RichText
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => RichText::class,
        ];
    }
}
