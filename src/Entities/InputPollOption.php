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
 * Class InputPollOption
 *
 * This object contains information about one answer option in a poll to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputpolloption
 *
 * @method string                 getText()          Option text, 1-100 characters
 * @method string                 getTextParseMode() Optional. Mode for parsing entities in the text. See formatting options for more details.
 * @method MessageEntity[]        getTextEntities()  Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
 * @method InputPollOptionMedia   getMedia()         Optional. Media to show for the option
 */
class InputPollOption extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'text_entities' => [MessageEntity::class],
        ];
    }
}
