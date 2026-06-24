<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockFooter
 *
 * @link https://core.telegram.org/bots/api#richblockfooter
 */
class RichBlockFooter extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text' => \Longman\TelegramBot\Entities\RichText\RichText::class,
        ];
    }
}
