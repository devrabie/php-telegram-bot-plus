<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockCollage
 *
 * @link https://core.telegram.org/bots/api#richblockcollage
 */
class RichBlockCollage extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'blocks' => [RichBlock::class],
            'caption' => RichBlockCaption::class,
        ];
    }
}
