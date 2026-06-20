# ميزات تحديث Bot API 9.6 و 10.0

يدعم هذا التحديث ميزات الإصدارين 9.6 و 10.0 من واجهة برمجة تطبيقات تيليجرام للبوتات (Telegram Bot API).

## Bot API 10.0

### 1. وضع الضيف (Guest Mode)
يسمح وضع الضيف للبوتات بتلقي رسائل معينة والرد عليها داخل دردشات لا تكون البوتات أعضاء فيها (مثل الرد على استعلامات موجهة).
لتمكين ذلك، يمكن إضافة أزرار أو روابط تفتح استعلامات الضيف، وسيتلقى البوت تحديث `guest_message`.

للرد على استعلام ضيف، يمكنك استخدام:
```php
$result = Request::answerGuestQuery([
    'guest_query_id' => '...',
    'text'           => 'مرحباً بك في وضع الضيف!',
]);
```

### 2. الصور الحية (Live Photos)
دعم الصور الحية التي تحتوي على صورة مع مقطع فيديو قصير.
يمكنك الآن إرسال صور حية باستخدام `sendLivePhoto`، أو إضافتها في الوسائط المدفوعة أو مجموعات الوسائط.

```php
Request::sendLivePhoto([
    'chat_id'    => $chat_id,
    'live_photo' => 'https://example.com/live_photo.mp4',
    'caption'    => 'صورة حية رائعة!',
]);
```

### 3. دعم الوسائط في الاستفتاءات (Poll Media)
أصبح بالإمكان إرفاق وسائط (صورة، فيديو، الخ) بالاستفتاء نفسه، أو بالتفسير، أو حتى بخيارات الاستفتاء المتعددة.

```php
Request::sendPoll([
    'chat_id'           => $chat_id,
    'question'          => 'أي هذه الصور تفضل؟',
    'options'           => [
        ['text' => 'الخيار الأول'],
        ['text' => 'الخيار الثاني']
    ],
    'media'             => [
        'type'  => 'photo',
        'media' => 'attach://photo1'
    ],
    // يمكن تحديد members_only أو country_codes أيضاً
]);
```

### 4. إدارة التفاعلات (Reactions)
يمكن للبوتات الآن حذف تفاعلات معينة، أو مسح كافة التفاعلات من رسالة معينة.

```php
Request::deleteAllMessageReactions([
    'chat_id'    => $chat_id,
    'message_id' => $message_id,
]);
```

### 5. إعدادات وصول البوتات المدارة
طرق جديدة لجلب إعدادات البوت المدار أو تعديلها باستخدام `getManagedBotAccessSettings` و `setManagedBotAccessSettings`.

---

## Bot API 9.6

### 1. البوتات المدارة (Managed Bots)
يسمح هذا التحديث للبوت بإنشاء وإدارة بوتات أخرى بالنيابة عن المستخدم من خلال تطبيقات الويب (Mini Apps).
عند إنشاء بوت، سيتلقى البوت الرئيسي رسالة أو تحديث يحتوي على `managed_bot_created` أو `managed_bot_updated`.

يمكنك الحصول على توكن البوت المدار عبر:
```php
$response = Request::getManagedBotToken([
    'bot_id' => 123456789,
]);
$token = $response->getResult();
```

### 2. ميزات الاستفتاء المتقدمة
- دعم تحديد إجابات صحيحة متعددة في وضع المسابقة (Quiz).
- السماح للمستخدمين بتغيير تصويتهم في جميع الاستفتاءات عبر `allows_revoting`.
- دعم الوصف `description` في الاستفتاء.
- استلام إشعارات بإضافة خيارات جديدة `poll_option_added` أو حذفها `poll_option_deleted` في الاستفتاءات الديناميكية.

```php
Request::sendPoll([
    'chat_id'                 => $chat_id,
    'question'                => 'اختر الإجابات الصحيحة:',
    'options'                 => ['أ', 'ب', 'ج'],
    'type'                    => 'quiz',
    'correct_option_ids'      => [0, 2], // السماح بإجابات متعددة
    'allows_multiple_answers' => true,
]);
```
