<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class SuggestedPostDeclined
 *
 * Describes a service message about the rejection of a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostdeclined
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string  getComment()              Optional. Comment with which the post was declined
 */
class SuggestedPostDeclined extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'suggested_post_message' => Message::class,
        ];
    }
}
