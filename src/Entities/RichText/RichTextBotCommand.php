<?php

namespace Longman\TelegramBot\Entities\RichText;

/**
 * Class RichTextBotCommand
 *
 * @link https://core.telegram.org/bots/api#richtextbotcommand
 */
class RichTextBotCommand extends RichText
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
