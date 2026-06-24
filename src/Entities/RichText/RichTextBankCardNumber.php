<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextBankCardNumber
 *
 * @link https://core.telegram.org/bots/api#richtextbankcardnumber
 */
class RichTextBankCardNumber extends RichText
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
