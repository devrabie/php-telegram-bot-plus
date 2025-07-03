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

/**
 * Class Conversation
 *
 * Only one conversation can be active at any one time.
 * A conversation is directly linked to a user, chat and the command that is managing the conversation.
 */
class Conversation
{
    /**
     * All information fetched from the database
     *
     * @var array|null
     */
    protected $conversation;

    /**
     * Notes stored inside the conversation
     *
     * @var mixed
     */
    protected $protected_notes;

    /**
     * Notes to be stored
     *
     * @var mixed
     */
    public $notes;

    /**
     * Telegram user id
     *
     * @var int
     */
    protected $user_id;

    /**
     * Telegram chat id
     *
     * @var int
     */
    protected $chat_id;

    /**
     * Command to be executed if the conversation is active
     *
     * @var string
     */
    protected $command;

    /**
     * Conversation constructor to initialize a new conversation
     *
     * @param int    $user_id
     * @param int    $chat_id
     * @param string $command
     *
     * @throws TelegramException
     */
    public function __construct(int $user_id, int $chat_id, string $command = '')
    {
        // Conversations are disabled due to DB removal
        $this->user_id = $user_id;
        $this->chat_id = $chat_id;
        $this->command = $command;
        $this->conversation = null; // Ensure conversation is null
        $this->notes = null;
        $this->protected_notes = null;
    }

    /**
     * Clear all conversation variables.
     *
     * @return bool Always return true, to allow this method in an if statement.
     */
    protected function clear(): bool
    {
        $this->conversation    = null;
        $this->protected_notes = null;
        $this->notes           = null;

        return true;
    }

    /**
     * Load the conversation from the database
     *
     * @return bool
     * @throws TelegramException
     */
    protected function load(): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Check if the conversation already exists
     *
     * @return bool
     */
    public function exists(): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Start a new conversation if the current command doesn't have one yet
     *
     * @return bool
     * @throws TelegramException
     */
    protected function start(): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Delete the current conversation
     *
     * Currently the Conversation is not deleted but just set to 'stopped'
     *
     * @return bool
     * @throws TelegramException
     */
    public function stop(): bool
    {
        // Always return true as DB is removed and nothing to stop
        return true;
    }

    /**
     * Cancel the current conversation
     *
     * @return bool
     * @throws TelegramException
     */
    public function cancel(): bool
    {
        // Always return true as DB is removed and nothing to cancel
        return true;
    }

    /**
     * Update the status of the current conversation
     *
     * @param string $status
     *
     * @return bool
     * @throws TelegramException
     */
    protected function updateStatus(string $status): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Store the array/variable in the database with json_encode() function
     *
     * @return bool
     * @throws TelegramException
     */
    public function update(): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Retrieve the command to execute from the conversation
     *
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * Retrieve the user id
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * Retrieve the chat id
     *
     * @return int
     */
    public function getChatId(): int
    {
        return $this->chat_id;
    }
}
