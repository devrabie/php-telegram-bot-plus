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
 * Class PaidMediaLivePhoto
 *
 * The paid media is a live photo.
 *
 * @link https://core.telegram.org/bots/api#paidmedialivephoto
 *
 * @method string    getType()      Type of the paid media, always “live_photo”
 * @method LivePhoto getLivePhoto() The live photo
 */
class PaidMediaLivePhoto extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'live_photo' => LivePhoto::class,
        ];
    }
}
