<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextTextMention
 *
 * @link https://core.telegram.org/bots/api#richtexttextmention
 */
class RichTextTextMention extends RichText
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => RichText::class,
            'user' => \Longman\TelegramBot\Entities\User::class,
        ];
    }
}
