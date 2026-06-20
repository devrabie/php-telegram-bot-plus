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
 * Class SentGuestMessage
 *
 * Contains information about a message that was sent in guest mode.
 *
 * @link https://core.telegram.org/bots/api#sentguestmessage
 *
 * @method int    getMessageId() Unique identifier of the message
 * @method int    getDate()      Date the message was sent in Unix time
 * @method string getGuestQueryId() Unique identifier of the guest query to which the message is a reply
 */
class SentGuestMessage extends Entity
{

}
