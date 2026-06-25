<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextCashtag
 *
 * @link https://core.telegram.org/bots/api#richtextcashtag
 */
class RichTextCashtag extends RichText
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
