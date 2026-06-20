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
 * Class PollOptionAdded
 *
 * Describes a service message about an option added to a poll.
 *
 * @link https://core.telegram.org/bots/api#polloptionadded
 *
 * @method Message         getPollMessage()        Optional. Message containing the poll to which the option was added
 * @method string          getOptionPersistentId() Unique identifier of the added option
 * @method string          getOptionText()         Option text
 * @method MessageEntity[] getOptionTextEntities() Optional. Special entities that appear in the option_text
 */
class PollOptionAdded extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'poll_message'         => Message::class,
            'option_text_entities' => [MessageEntity::class],
        ];
    }
}
