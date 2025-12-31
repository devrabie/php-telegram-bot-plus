<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class SuggestedPostApprovalFailed
 *
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostapprovalfailed
 *
 * @method Message            getSuggestedPostMessage() Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method SuggestedPostPrice getPrice()                Expected price of the post
 */
class SuggestedPostApprovalFailed extends Entity
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
