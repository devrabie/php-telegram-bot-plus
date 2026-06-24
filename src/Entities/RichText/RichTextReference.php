<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextReference
 *
 * @link https://core.telegram.org/bots/api#richtextreference
 */
class RichTextReference extends RichText
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
