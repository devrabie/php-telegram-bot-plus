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
 * Class ManagedBotUpdated
 *
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 *
 * @link https://core.telegram.org/bots/api#managedbotupdated
 *
 * @method User getUser() User that created the bot
 * @method User getBot()  Information about the bot.
 */
class ManagedBotUpdated extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'user' => User::class,
            'bot'  => User::class,
        ];
    }
}
