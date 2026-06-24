<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextUrl
 *
 * @link https://core.telegram.org/bots/api#richtexturl
 */
class RichTextUrl extends RichText
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
