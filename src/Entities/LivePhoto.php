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
 * Class LivePhoto
 *
 * This object represents a live photo.
 *
 * @link https://core.telegram.org/bots/api#livephoto
 *
 * @method string    getFileId()       Identifier for this file, which can be used to download or reuse the file
 * @method string    getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int       getWidth()        Live photo width
 * @method int       getHeight()       Live photo height
 * @method int       getDuration()     Duration of the video in seconds
 * @method PhotoSize getThumbnail()    Optional. Live photo thumbnail
 * @method int       getFileSize()     Optional. File size in bytes
 */
class LivePhoto extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}
