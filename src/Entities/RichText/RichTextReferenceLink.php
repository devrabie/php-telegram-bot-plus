<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextReferenceLink
 *
 * @link https://core.telegram.org/bots/api#richtextreferencelink
 */
class RichTextReferenceLink extends RichText
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
