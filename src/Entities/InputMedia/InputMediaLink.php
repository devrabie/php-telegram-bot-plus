<?php

namespace Longman\TelegramBot\Entities\InputMedia;

use Longman\TelegramBot\Entities\Entity;

/**
 * Class InputMediaLink
 *
 * @link https://core.telegram.org/bots/api#inputmedialink
 *
 * @method string getType() Type of the result, must be link
 * @method string getUrl()  URL of the link
 */
class InputMediaLink extends Entity implements InputMedia
{
}
