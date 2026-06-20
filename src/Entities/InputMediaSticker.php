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
 * Class InputMediaSticker
 *
 * Represents a sticker to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediasticker
 *
 * @method string getType()  Type of the result, must be sticker
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
 */
class InputMediaSticker extends InputMedia
{

}
