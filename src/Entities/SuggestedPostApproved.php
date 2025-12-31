<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class SuggestedPostApproved
 *
 * Describes a service message about the approval of a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostapproved
 *
 * @method Message            getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method SuggestedPostPrice getPrice()                Optional. Amount paid for the post
 * @method int                getSendDate()             Date when the post will be published
 */
class SuggestedPostApproved extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'suggested_post_message' => Message::class,
            'price'                  => SuggestedPostPrice::class,
        ];
    }
}
