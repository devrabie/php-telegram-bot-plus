<?php

namespace Longman\TelegramBot\Tests\Unit\Entities;

use Longman\TelegramBot\Entities\User;
use Longman\TelegramBot\Entities\Message;
use Longman\TelegramBot\Entities\UniqueGiftInfo;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Entities\ChatFullInfo;
use Longman\TelegramBot\Entities\BusinessConnection;
use Longman\TelegramBot\Entities\AffiliateInfo;
use Longman\TelegramBot\Entities\StarTransaction;
use Longman\TelegramBot\Entities\ChatMember\ChatMemberMember;
use Longman\TelegramBot\Entities\ChatMember\ChatMemberRestricted;
use Longman\TelegramBot\Entities\ChatMember\ChatMemberAdministrator;
use Longman\TelegramBot\Entities\MessageEntity;
use Longman\TelegramBot\Entities\Video;
use Longman\TelegramBot\Tests\Unit\TestCase;

class Api95Test extends TestCase
{
    public function testUserNewFields(): void
    {
        $user = new User([
            'id' => 123,
            'first_name' => 'Test',
            'has_topics_enabled' => true,
            'allows_users_to_create_topics' => true,
        ]);
        self::assertTrue($user->getHasTopicsEnabled());
        self::assertTrue($user->getAllowsUsersToCreateTopics());
    }

    public function testMessageNewFields(): void
    {
        $message = new Message([
            'message_id' => 1,
            'date' => 123456789,
            'chat' => ['id' => 123, 'type' => 'private'],
            'sender_tag' => 'vip',
            'show_caption_above_media' => true,
            'is_paid_post' => true,
        ]);
        self::assertEquals('vip', $message->getSenderTag());
        self::assertTrue($message->getShowCaptionAboveMedia());
        self::assertTrue($message->getIsPaidPost());
    }

    public function testUniqueGiftInfoReplacedFields(): void
    {
        $info = new UniqueGiftInfo([
            'gift' => [
                'id' => '123',
                'sticker' => ['file_id' => 'abc', 'file_unique_id' => 'def', 'type' => 'regular', 'width' => 512, 'height' => 512],
                'star_count' => 10,
            ],
            'origin' => 'resale',
            'last_resale_currency' => 'XTR',
            'last_resale_amount' => 100,
        ]);
        self::assertEquals('XTR', $info->getLastResaleCurrency());
        self::assertEquals(100, $info->getLastResaleAmount());
        self::assertNull($info->getProperty('last_resale_star_count'));
    }

    public function testNewUpdateTypes(): void
    {
        $update = new Update([
            'update_id' => 1,
            'purchased_paid_media' => [
                'from' => ['id' => 123, 'first_name' => 'John'],
                'paid_media_payload' => 'abc',
            ],
        ]);
        self::assertEquals('purchased_paid_media', $update->getUpdateType());
        self::assertInstanceOf(\Longman\TelegramBot\Entities\PaidMediaPurchased::class, $update->getPurchasedPaidMedia());
        self::assertEquals('abc', $update->getPurchasedPaidMedia()->getPaidMediaPayload());
    }

    public function testChatMemberTags(): void
    {
        $member = new ChatMemberMember([
            'status' => 'member',
            'user' => ['id' => 123, 'first_name' => 'John'],
            'tag' => 'Elite',
        ]);
        self::assertEquals('Elite', $member->getTag());

        $admin = new ChatMemberAdministrator([
            'status' => 'administrator',
            'user' => ['id' => 123, 'first_name' => 'Admin'],
            'can_manage_tags' => true,
        ]);
        self::assertTrue($admin->getCanManageTags());

        $restricted = new ChatMemberRestricted([
            'status' => 'restricted',
            'user' => ['id' => 123, 'first_name' => 'Restricted'],
            'can_edit_tag' => true,
        ]);
        self::assertTrue($restricted->getCanEditTag());
    }

    public function testDateTimeEntity(): void
    {
        $entity = new MessageEntity([
            'type' => 'date_time',
            'offset' => 0,
            'length' => 10,
        ]);
        self::assertEquals('date_time', $entity->getType());
    }

    public function testVideoQualities(): void
    {
        $video = new Video([
            'file_id' => 'abc',
            'file_unique_id' => 'def',
            'width' => 1920,
            'height' => 1080,
            'duration' => 60,
            'qualities' => [
                ['quality' => 'best'],
                ['quality' => 'low'],
            ],
        ]);
        self::assertIsArray($video->getQualities());
        self::assertEquals('best', $video->getQualities()[0]->getQuality());
    }
}
