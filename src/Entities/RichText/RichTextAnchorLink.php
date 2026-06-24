<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextAnchorLink
 *
 * @link https://core.telegram.org/bots/api#richtextanchorlink
 */
class RichTextAnchorLink extends RichText
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
