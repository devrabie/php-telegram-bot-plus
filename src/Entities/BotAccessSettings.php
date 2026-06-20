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
 * Class BotAccessSettings
 *
 * This object contains information about the bot's access settings.
 *
 * @link https://core.telegram.org/bots/api#botaccesssettings
 *
 * @method bool getCanJoinGroups()           True, if the bot can be invited to groups
 * @method bool getCanReadAllGroupMessages() True, if privacy mode is disabled for the bot
 * @method bool getHasTopicsEnabled()        True, if the bot has forum topic mode enabled in private chats
 * @method bool getCanManageBots()           True, if the user is allowed to create, edit, or delete managed bots.
 * @method bool getSupportsGuestQueries()    True, if the bot supports guest queries.
 */
class BotAccessSettings extends Entity
{

}
