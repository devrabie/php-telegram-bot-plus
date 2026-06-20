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
 * Class PollOptionDeleted
 *
 * Describes a service message about an option deleted from a poll.
 *
 * @link https://core.telegram.org/bots/api#polloptiondeleted
 *
 * @method Message         getPollMessage()        Optional. Message containing the poll from which the option was deleted
 * @method string          getOptionPersistentId() Unique identifier of the deleted option
 * @method string          getOptionText()         Option text
 * @method MessageEntity[] getOptionTextEntities() Optional. Special entities that appear in the option_text
 */
class PollOptionDeleted extends Entity
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
