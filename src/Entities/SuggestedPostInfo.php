<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class SuggestedPostInfo
 *
 * Contains information about a suggested post.
 *
 * @link https://core.telegram.org/bots/api#suggestedpostinfo
 *
 * @method string             getState()    State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
 * @method SuggestedPostPrice getPrice()    Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
 * @method int                getSendDate() Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
 */
class SuggestedPostInfo extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'price' => SuggestedPostPrice::class,
        ];
    }
}
