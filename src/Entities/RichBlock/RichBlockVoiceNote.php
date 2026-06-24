<?php

namespace Longman\TelegramBot\Entities\RichBlock;

/**
 * Class RichBlockVoiceNote
 *
 * @link https://core.telegram.org/bots/api#richblockvoicenote
 */
class RichBlockVoiceNote extends RichBlock
{

    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption' => RichBlockCaption::class,
            'voice_note' => \Longman\TelegramBot\Entities\Voice::class,
        ];
    }
}
