<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextSpoiler
 *
 * @link https://core.telegram.org/bots/api#richtextspoiler
 */
class RichTextSpoiler extends RichText
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
