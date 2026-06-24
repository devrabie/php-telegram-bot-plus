<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextHashtag
 *
 * @link https://core.telegram.org/bots/api#richtexthashtag
 */
class RichTextHashtag extends RichText
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
