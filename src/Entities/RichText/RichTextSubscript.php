<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextSubscript
 *
 * @link https://core.telegram.org/bots/api#richtextsubscript
 */
class RichTextSubscript extends RichText
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
