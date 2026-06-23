<?php

namespace Longman\TelegramBot\Entities\RichText;

use Longman\TelegramBot\Entities\Entity;
use Longman\TelegramBot\Entities\Factory;

/**
 * Class RichText
 *
 * This object represents rich formatted text.
 * Currently, it can be one of the subclass types.
 *
 * @link https://core.telegram.org/bots/api#richtext
 */
class RichText extends Entity implements Factory
{
    /**
     * @param array $data
     * @param string $bot_username
     *
     * @return RichText
     */
    public static function make(array $data, string $bot_username): Entity
    {
        $type = $data['type'] ?? '';

        $class = __NAMESPACE__ . '\\RichText' . str_replace(' ', '', ucwords(str_replace('_', ' ', $type)));
        if (class_exists($class)) {
            return new $class($data, $bot_username);
        }

        // Fallback to base entity if the specific class doesn't exist
        return new self($data, $bot_username);
    }
}
