<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class SuggestedPostPaid
 *
 * Describes a service message about a successful payment for a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostpaid
 *
 * @method Message    getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string     getCurrency()             Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
 * @method int        getAmount()               Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
 * @method StarAmount getStarAmount()           Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
 */
class SuggestedPostPaid extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'suggested_post_message' => Message::class,
            'star_amount'            => StarAmount::class,
        ];
    }
}
