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
 * Class PollMedia
 *
 * This object represents a media in a poll.
 *
 * @link https://core.telegram.org/bots/api#pollmedia
 *
 * @method string    getType()     Type of the media
 * @method PhotoSize getPhoto()    Optional. Photo
 * @method Video     getVideo()    Optional. Video
 * @method Animation getAnimation() Optional. Animation
 * @method Audio     getAudio()    Optional. Audio
 * @method Document  getDocument() Optional. Document
 * @method Sticker   getSticker()  Optional. Sticker
 * @method Location  getLocation() Optional. Location
 * @method Venue     getVenue()    Optional. Venue
 * @method Link      getLink()     Optional. Link
 */
class PollMedia extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'photo'     => PhotoSize::class,
            'video'     => Video::class,
            'animation' => Animation::class,
            'audio'     => Audio::class,
            'document'  => Document::class,
            'sticker'   => Sticker::class,
            'location'  => Location::class,
            'venue'     => Venue::class,
            'link'      => Link::class,
        ];
    }
}
