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
 * Class InputMediaLocation
 *
 * Represents a location to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmedialocation
 *
 * @method string getType()                Type of the result, must be location
 * @method float  getLatitude()            Latitude of the location
 * @method float  getLongitude()           Longitude of the location
 * @method float  getHorizontalAccuracy()  Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @method int    getLivePeriod()          Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @method int    getHeading()             Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
 * @method int    getProximityAlertRadius() Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
 */
class InputMediaLocation extends InputMedia
{

}
