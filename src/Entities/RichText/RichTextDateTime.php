<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextDateTime
 *
 * @link https://core.telegram.org/bots/api#richtextdatetime
 */
class RichTextDateTime extends RichText
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
