<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextBold
 *
 * @link https://core.telegram.org/bots/api#richtextbold
 */
class RichTextBold extends RichText
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
