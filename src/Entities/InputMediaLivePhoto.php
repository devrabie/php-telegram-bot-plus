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
 * Class InputMediaLivePhoto
 *
 * Represents a live photo to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmedialivephoto
 *
 * @method string          getType()                  Type of the result, must be live_photo
 * @method string          getMedia()                 File to send
 * @method string          getThumbnail()             Optional. Thumbnail of the file sent
 * @method string          getCaption()               Optional. Caption of the live photo to be sent, 0-1024 characters after entities parsing
 * @method string          getCaptionParseMode()      Optional. Mode for parsing entities in the live photo caption.
 * @method MessageEntity[] getCaptionEntities()       Optional. List of special entities that appear in the caption
 * @method bool            getShowCaptionAboveMedia() Optional. Pass True, if the caption must be shown above the message media
 * @method bool            getHasSpoiler()            Optional. Pass True if the photo needs to be covered with a spoiler animation
 */
class InputMediaLivePhoto extends InputMedia
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'caption_entities' => [MessageEntity::class],
        ];
    }
}
