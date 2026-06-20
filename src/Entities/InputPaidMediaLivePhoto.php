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
 * Class InputPaidMediaLivePhoto
 *
 * The paid media to send is a live photo.
 *
 * @link https://core.telegram.org/bots/api#inputpaidmedialivephoto
 *
 * @method string getType()      Type of the media, must be live_photo
 * @method string getMedia()     File to send
 * @method string getThumbnail() Optional. Thumbnail of the file sent
 */
class InputPaidMediaLivePhoto extends InputPaidMedia
{

}
