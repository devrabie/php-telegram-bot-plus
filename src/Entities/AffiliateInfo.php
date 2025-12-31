<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class AffiliateInfo
 *
 * Contains information about the affiliate that received a commission via this transaction.
 *
 * @link https://core.telegram.org/bots/api#affiliateinfo
 *
 * @method User getAffiliateUser()      Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
 * @method Chat getAffiliateChat()      Optional. The chat that received an affiliate commission if it was received by a chat
 * @method int  getCommissionPerMille() The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
 * @method int  getAmount()             Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
 * @method int  getNanostarAmount()     Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
 */
class AffiliateInfo extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'affiliate_user' => User::class,
            'affiliate_chat' => Chat::class,
        ];
    }
}
