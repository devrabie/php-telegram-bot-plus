<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockPreformatted
 *
 * @link https://core.telegram.org/bots/api#richblockpreformatted
 */
class RichBlockPreformatted extends RichBlock
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
