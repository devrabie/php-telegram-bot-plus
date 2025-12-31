<?php

namespace Longman\TelegramBot\Entities;

/**
 * Class BusinessBotRights
 *
 * Represents the rights of a business bot.
 *
 * @link https://core.telegram.org/bots/api#businessbotrights
 *
 * @method bool getCanReply()                    Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
 * @method bool getCanReadMessages()             Optional. True, if the bot can mark incoming private messages as read
 * @method bool getCanDeleteSentMessages()       Optional. True, if the bot can delete messages sent by the bot
 * @method bool getCanDeleteAllMessages()        Optional. True, if the bot can delete all private messages in managed chats
 * @method bool getCanEditName()                 Optional. True, if the bot can edit the first and last name of the business account
 * @method bool getCanEditBio()                  Optional. True, if the bot can edit the bio of the business account
 * @method bool getCanEditProfilePhoto()         Optional. True, if the bot can edit the profile photo of the business account
 * @method bool getCanEditUsername()             Optional. True, if the bot can edit the username of the business account
 * @method bool getCanChangeGiftSettings()       Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
 * @method bool getCanViewGiftsAndStars()        Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
 * @method bool getCanConvertGiftsToStars()      Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
 * @method bool getCanTransferAndUpgradeGifts()  Optional. True, if the bot can transfer and upgrade gifts owned by the business account
 * @method bool getCanTransferStars()            Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
 * @method bool getCanManageStories()            Optional. True, if the bot can post, edit and delete stories on behalf of the business account
 */
class BusinessBotRights extends Entity
{
}
