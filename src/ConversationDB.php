<?php

/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot;

use Longman\TelegramBot\Exception\TelegramException;

class ConversationDB extends DB
{
    /**
     * Initialize conversation table
     */
    public static function initializeConversation(): void
    {
        // Table definition removed as DB is removed
    }

    /**
     * Select a conversation from the DB
     *
     * @param int $user_id
     * @param int $chat_id
     * @param int $limit
     *
     * @return array|bool
     * @throws TelegramException
     */
    public static function selectConversation(int $user_id, int $chat_id, $limit = 0)
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert the conversation in the database
     *
     * @param int    $user_id
     * @param int    $chat_id
     * @param string $command
     *
     * @return bool
     * @throws TelegramException
     */
    public static function insertConversation(int $user_id, int $chat_id, string $command): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Update a specific conversation
     *
     * @param array $fields_values
     * @param array $where_fields_values
     *
     * @return bool
     * @throws TelegramException
     */
    public static function updateConversation(array $fields_values, array $where_fields_values): bool
    {
        // Always return false as DB is removed
        return false;
    }
}
