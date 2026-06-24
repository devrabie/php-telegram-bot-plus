<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextItalic
 *
 * @link https://core.telegram.org/bots/api#richtextitalic
 */
class RichTextItalic extends RichText
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
