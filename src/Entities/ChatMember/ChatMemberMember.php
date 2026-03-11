<?php

namespace Longman\TelegramBot\Entities\ChatMember;

use Longman\TelegramBot\Entities\Entity;
use Longman\TelegramBot\Entities\User;

/**
 * Class ChatMemberMember
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * @method string getStatus()    The member's status in the chat, always “member”
 * @method User   getUser()      Information about the user
 * @method int    getUntilDate() Optional. Date when the user's subscription will expire; unix time
 * @method string getTag()       Optional. Custom title for this user
 */
class ChatMemberMember extends Entity implements ChatMember
{
    /**
     * @inheritDoc
     */
    protected function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
