<?php

/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Entities;

/**
 * Class ChatOwnerChanged
 *
 * This object represents a service message about the chat owner changing.
 *
 * @link https://core.telegram.org/bots/api#chatownerchanged
 *
 * @method User getOldOwner() User that left the chat
 * @method User getNewOwner() New owner of the chat
 * @method Chat getChat()     Chat
 */
class ChatOwnerChanged extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'old_owner' => User::class,
            'new_owner' => User::class,
            'chat'      => Chat::class,
        ];
    }
}
