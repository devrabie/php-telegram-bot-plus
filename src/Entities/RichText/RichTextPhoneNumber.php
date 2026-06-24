<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextPhoneNumber
 *
 * @link https://core.telegram.org/bots/api#richtextphonenumber
 */
class RichTextPhoneNumber extends RichText
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
