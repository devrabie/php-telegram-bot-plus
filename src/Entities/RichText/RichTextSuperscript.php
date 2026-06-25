<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextSuperscript
 *
 * @link https://core.telegram.org/bots/api#richtextsuperscript
 */
class RichTextSuperscript extends RichText
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
