<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class ChatOwnerLeft
 *
 * This object represents a service message about a chat owner that left the chat.
 *
 * @link https://core.telegram.org/bots/api#chatownerleft
 *
 * @method Chat getChat() Chat that the owner left
 */
class ChatOwnerLeft extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'chat' => Chat::class,
        ];
    }
}
