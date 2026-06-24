<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockCaption
 *
 * @link https://core.telegram.org/bots/api#richblockcaption
 */
class RichBlockCaption extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => \Longman\TelegramBot\Entities\RichText\RichText::class,
            'credit' => \Longman\TelegramBot\Entities\RichText\RichText::class,
        ];
    }
}
