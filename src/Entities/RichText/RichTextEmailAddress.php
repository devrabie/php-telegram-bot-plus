<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextEmailAddress
 *
 * @link https://core.telegram.org/bots/api#richtextemailaddress
 */
class RichTextEmailAddress extends RichText
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
