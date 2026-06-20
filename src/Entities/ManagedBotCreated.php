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
 * Class ManagedBotCreated
 *
 * This object contains information about the bot that was created to be managed by the current bot.
 *
 * @link https://core.telegram.org/bots/api#managedbotcreated
 *
 * @method User getBot() Information about the bot.
 */
class ManagedBotCreated extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'bot' => User::class,
        ];
    }
}
