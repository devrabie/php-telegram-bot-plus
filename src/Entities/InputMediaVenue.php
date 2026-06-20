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
 * Class InputMediaVenue
 *
 * Represents a venue to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediavenue
 *
 * @method string getType()          Type of the result, must be venue
 * @method float  getLatitude()      Latitude of the venue
 * @method float  getLongitude()     Longitude of the venue
 * @method string getTitle()         Name of the venue
 * @method string getAddress()       Address of the venue
 * @method string getFoursquareId()  Optional. Foursquare identifier of the venue
 * @method string getFoursquareType() Optional. Foursquare type of the venue, if known.
 * @method string getGooglePlaceId() Optional. Google Places identifier of the venue
 * @method string getGooglePlaceType() Optional. Google Places type of the venue.
 */
class InputMediaVenue extends InputMedia
{

}
