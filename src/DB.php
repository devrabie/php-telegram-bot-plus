<?php

/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * Written by Marco Boretto <marco.bore@gmail.com>
 */

namespace Longman\TelegramBot;

use Longman\TelegramBot\Entities\CallbackQuery;
use Longman\TelegramBot\Entities\Chat;
use Longman\TelegramBot\Entities\ChatBoostRemoved;
use Longman\TelegramBot\Entities\ChatBoostUpdated;
use Longman\TelegramBot\Entities\ChatJoinRequest;
use Longman\TelegramBot\Entities\ChatMemberUpdated;
use Longman\TelegramBot\Entities\ChosenInlineResult;
use Longman\TelegramBot\Entities\InlineQuery;
use Longman\TelegramBot\Entities\Message;
use Longman\TelegramBot\Entities\MessageOrigin\MessageOriginChannel;
use Longman\TelegramBot\Entities\MessageOrigin\MessageOriginChat;
use Longman\TelegramBot\Entities\MessageOrigin\MessageOriginHiddenUser;
use Longman\TelegramBot\Entities\MessageOrigin\MessageOriginUser;
use Longman\TelegramBot\Entities\MessageReactionCountUpdated;
use Longman\TelegramBot\Entities\MessageReactionUpdated;
use Longman\TelegramBot\Entities\Payments\PreCheckoutQuery;
use Longman\TelegramBot\Entities\Payments\ShippingQuery;
use Longman\TelegramBot\Entities\Poll;
use Longman\TelegramBot\Entities\PollAnswer;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Entities\User;
use Longman\TelegramBot\Exception\TelegramException;
use PDOException;

class DB
{
    /**
     * Telegram class object
     *
     * @var Telegram
     */
    protected static $telegram;

    /**
     * Fetch update(s) from DB
     *
     * @param int    $limit Limit the number of updates to fetch
     * @param string $id    Check for unique update id
     *
     * @return array|bool Fetched data or false if not connected
     * @throws TelegramException
     */
    public static function selectTelegramUpdate(int $limit = 0, string $id = '')
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Fetch message(s) from DB
     *
     * @param int $limit Limit the number of messages to fetch
     *
     * @return array|bool Fetched data or false if not connected
     * @throws TelegramException
     */
    public static function selectMessages(int $limit = 0)
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Convert from unix timestamp to timestamp
     *
     * @param ?int $unixtime Unix timestamp (if empty, current timestamp is used)
     *
     * @return string
     */
    protected static function getTimestamp(?int $unixtime = null): string
    {
        return date('Y-m-d H:i:s', $unixtime ?? time());
    }

    /**
     * Convert array of Entity items to a JSON array
     *
     * @param array $entities
     * @param mixed $default
     *
     * @return mixed
     * @todo Find a better way, as json_* functions are very heavy
     *
     */
    public static function entitiesArrayToJson(array $entities, $default = null)
    {
        if (empty($entities)) {
            return $default;
        }

        // Convert each Entity item into an object based on its JSON reflection
        $json_entities = array_map(function ($entity) {
            return json_decode($entity, true);
        }, $entities);

        return json_encode($json_entities);
    }

    /**
     * Insert entry to telegram_update table
     *
     * @throws TelegramException
     */
    protected static function insertTelegramUpdate(
        int $update_id,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?int $edited_message_id = null,
        ?int $channel_post_id = null,
        ?int $edited_channel_post_id = null,
        ?string $message_reaction_id = null,
        ?string $message_reaction_count_id = null,
        ?string $inline_query_id = null,
        ?string $chosen_inline_result_id = null,
        ?string $callback_query_id = null,
        ?string $shipping_query_id = null,
        ?string $pre_checkout_query_id = null,
        ?string $poll_id = null,
        ?string $poll_answer_poll_id = null,
        ?string $my_chat_member_updated_id = null,
        ?string $chat_member_updated_id = null,
        ?string $chat_join_request_id = null,
        ?string $chat_boost_updated_id = null,
        ?string $chat_boost_removed_id = null,
    ): ?bool {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert users and save their connection to chats
     *
     * @param User        $user
     * @param string|null $date
     * @param Chat|null   $chat
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertUser(User $user, ?string $date = null, ?Chat $chat = null): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chat
     *
     * @param Chat        $chat
     * @param string|null $date
     * @param int|null    $migrate_to_chat_id
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChat(Chat $chat, ?string $date = null, ?int $migrate_to_chat_id = null): ?bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert request into database
     *
     * @param Update $update
     *
     * @return bool
     * @throws TelegramException
     * @todo self::$pdo->lastInsertId() - unsafe usage if expected previous insert fails?
     *
     */
    public static function insertRequest(Update $update): bool
    {
        // Always return false as DB is removed
        return false;
    }

    public static function insertMessageReaction(MessageReactionUpdated $message_reaction): bool
    {
        // Always return false as DB is removed
        return false;
    }

    public static function insertMessageReactionCount(MessageReactionCountUpdated $message_reaction_count): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert inline query request into database
     *
     * @param InlineQuery $inline_query
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertInlineQueryRequest(InlineQuery $inline_query): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chosen inline result request into database
     *
     * @param ChosenInlineResult $chosen_inline_result
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChosenInlineResultRequest(ChosenInlineResult $chosen_inline_result): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert callback query request into database
     *
     * @param CallbackQuery $callback_query
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertCallbackQueryRequest(CallbackQuery $callback_query): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert shipping query request into database
     *
     * @param ShippingQuery $shipping_query
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertShippingQueryRequest(ShippingQuery $shipping_query): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert pre checkout query request into database
     *
     * @param PreCheckoutQuery $pre_checkout_query
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertPreCheckoutQueryRequest(PreCheckoutQuery $pre_checkout_query): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert poll request into database
     *
     * @param Poll $poll
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertPollRequest(Poll $poll): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert poll answer request into database
     *
     * @param PollAnswer $poll_answer
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertPollAnswerRequest(PollAnswer $poll_answer): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chat member updated request into database
     *
     * @param ChatMemberUpdated $chat_member_updated
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChatMemberUpdatedRequest(ChatMemberUpdated $chat_member_updated): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chat join request into database
     *
     * @param ChatJoinRequest $chat_join_request
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChatJoinRequestRequest(ChatJoinRequest $chat_join_request): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chat boost updated into database
     *
     * @param ChatBoostUpdated $chat_boost_updated
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChatBoostUpdatedRequest(ChatBoostUpdated $chat_boost_updated): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert chat boost removed into database
     *
     * @param ChatBoostRemoved $chat_boost_removed
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertChatBoostRemovedRequest(ChatBoostRemoved $chat_boost_removed): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert Message request in db
     *
     * @param Message $message
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertMessageRequest(Message $message): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert Edited Message request in db
     *
     * @param Message $edited_message
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertEditedMessageRequest(Message $edited_message): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Select Groups, Supergroups, Channels and/or single user Chats (also by ID or text)
     *
     * @param $select_chats_params
     *
     * @return array|bool
     * @throws TelegramException
     */
    public static function selectChats($select_chats_params)
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Get Telegram API request count for current chat / message
     *
     * @param int|string|null $chat_id
     * @param string|null     $inline_message_id
     *
     * @return array|bool Array containing TOTAL and CURRENT fields or false on invalid arguments
     * @throws TelegramException
     */
    public static function getTelegramRequestCount($chat_id = null, string $inline_message_id = null)
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Insert Telegram API request in db
     *
     * @param string $method
     * @param array  $data
     *
     * @return bool If the insert was successful
     * @throws TelegramException
     */
    public static function insertTelegramRequest(string $method, array $data): bool
    {
        // Always return false as DB is removed
        return false;
    }

    /**
     * Bulk update the entries of any table
     *
     * @param string $table
     * @param array  $fields_values
     * @param array  $where_fields_values
     *
     * @return bool
     * @throws TelegramException
     */
    public static function update(string $table, array $fields_values, array $where_fields_values): bool
    {
        // Always return false as DB is removed
        return false;
    }
}
