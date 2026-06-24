<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextUnderline
 *
 * @link https://core.telegram.org/bots/api#richtextunderline
 */
class RichTextUnderline extends RichText
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
