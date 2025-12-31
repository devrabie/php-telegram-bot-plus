<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class DirectMessagesTopic
 *
 * Describes a topic of a direct messages chat.
 *
 * @link https://core.telegram.org/bots/api#directmessagestopic
 *
 * @method int  getTopicId() Unique identifier of the topic
 * @method User getUser()    Optional. Information about the user that created the topic. Currently, it is always present
 */
class DirectMessagesTopic extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
