<?php

namespace Longman\TelegramBot\Entities\RichBlock;

use Longman\TelegramBot\Entities\Entity;
use Longman\TelegramBot\Entities\Factory;

/**
 * Class RichBlock
 *
 * This object represents a block in a rich formatted message.
 * Currently, it can be one of the subclass types.
 *
 * @link https://core.telegram.org/bots/api#richblock
 */
class RichBlock extends Entity implements Factory
{
    /**
     * @param array $data
     * @param string $bot_username
     *
     * @return RichBlock
     */
    public static function make(array $data, string $bot_username): Entity
    {
        $type = $data['type'] ?? '';

        $class = __NAMESPACE__ . '\\RichBlock' . str_replace(' ', '', ucwords(str_replace('_', ' ', $type)));
        if (class_exists($class)) {
            return new $class($data, $bot_username);
        }

        // Fallback to base entity if the specific class doesn't exist
        return new self($data, $bot_username);
    }
}
