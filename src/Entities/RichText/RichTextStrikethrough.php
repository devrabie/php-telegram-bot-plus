<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextStrikethrough
 *
 * @link https://core.telegram.org/bots/api#richtextstrikethrough
 */
class RichTextStrikethrough extends RichText
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
