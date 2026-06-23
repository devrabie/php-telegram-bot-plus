# ميزات تحديث Bot API 10.1

يدعم هذا التحديث ميزات الإصدار 10.1 من واجهة برمجة تطبيقات تيليجرام للبوتات (Telegram Bot API) الصادر في 11 يونيو 2026.

## 1. الرسائل الغنية (Rich Messages)
تمت إضافة دعم للرسائل الغنية مما يتيح للبوتات إرسال نصوص منظمة وبث ردود تم إنشاؤها عبر الذكاء الاصطناعي مع تنسيقات غنية وسلسة.

- **الكيانات الجديدة:** إضافة فئات تمثل تنسيقات النصوص الغنية (مثل `RichTextBold`، `RichTextItalic`، `RichTextUrl` والمزيد) وكتل الرسائل (مثل `RichBlockParagraph`، `RichBlockTable`، `RichBlockVideo` والمزيد).
- **إرسال رسائل غنية:** استخدام `Request::sendRichMessage` و `Request::sendRichMessageDraft`.

**مثال تطبيقي:**
```php
use Longman\TelegramBot\Request;

$response = Request::sendRichMessage([
    'chat_id'      => $chat_id,
    'rich_message' => [
        'type'   => 'rich_message',
        'blocks' => [
            [
                'type' => 'rich_block_paragraph',
                'text' => [
                    'type' => 'rich_text_bold',
                    'text' => 'مرحباً بك في ميزة الرسائل الغنية!'
                ]
            ]
        ]
    ]
]);
```

- **تعديل رسائل غنية:** يمكنك الآن تمرير `rich_message` إلى وظيفة `editMessageText` لتعديل الرسائل لتصبح رسائل غنية.

## 2. استعلامات طلب الانضمام (Join Request Queries)
تم توفير دعم لاستعلامات طلب الانضمام التي تقدم تفاعلات متقدمة عند انضمام المستخدمين.

- يمكن التحقق مما إذا كان المستخدم يدعم هذه الاستعلامات من خلال حقل `supports_join_request_queries` في كائن `User`.
- يمكن تحديد البوت الحارس للدردشة من خلال الحقل `guard_bot` في كائن `ChatFullInfo`.
- للرد على استعلام:
```php
use Longman\TelegramBot\Request;

$result = Request::answerChatJoinRequestQuery([
    'query_id' => $query_id,
    'text'     => 'تمت الموافقة على طلبك بنجاح!'
]);
```

## 3. الوسائط المتصلة بالاستفتاءات (Poll Media)
تمت إضافة فئات جديدة مثل `Link` لدعم تضمين الروابط المباشرة في وسائط الاستفتاء (`PollMedia`).

```php
use Longman\TelegramBot\Request;

Request::sendPoll([
    'chat_id'  => $chat_id,
    'question' => 'ما رأيك في هذا الرابط؟',
    'options'  => [['text' => 'ممتاز'], ['text' => 'جيد']],
    'media'    => [
        'type' => 'link',
        'url'  => 'https://example.com'
    ]
]);
```

تم تحديث المكتبة بالكامل لدعم هذه الكيانات والأساليب بطريقة سهلة ومدمجة.

## 4. تنسيق الرسائل عبر HTML في الرسائل الغنية (HTML Formatting)
تسمح تيليجرام أيضاً بتنسيق الرسائل الغنية باستخدام `HTML` دون الحاجة لتعريف هيكل `RichBlock` بالكامل عبر المصفوفات المعقدة. تم إضافة علامات (Tags) جديدة لدعم الرسائل الغنية.

**التنسيقات الجديدة المدعومة:**
- `<mark>` أو `<mark class="marked">`: لتمييز النص (Marked).
- `<sub>`: للنصوص السفلية (Subscript).
- `<sup>`: للنصوص العلوية (Superscript).
- `<details>` و `<summary>`: لإضافة كتل التفاصيل القابلة للطي (Details Block).
- `<blockquote>` مع دعم `expandable`: للاقتباسات القابلة للتوسيع.

**كيفية كتابتها (مثال):**
```php
use Longman\TelegramBot\Request;

$htmlText = '
<b>نص عريض</b>
<mark>نص مميز</mark>
H<sub>2</sub>O و E=mc<sup>2</sup>
<details>
  <summary>اضغط لمعرفة المزيد</summary>
  هذا النص سيكون مخفياً حتى يقوم المستخدم بتوسيعه.
</details>
';

$response = Request::sendRichMessage([
    'chat_id'      => $chat_id,
    'rich_message' => [
        'type'   => 'rich_message',
        'blocks' => [
            [
                'type' => 'rich_block_paragraph',
                'text' => [
                    'type' => 'rich_text_marked',
                    'text' => 'يمكنك استخدام المصفوفات، أو تمرير HTML مباشرة حسب الطريقة التي تفضلها في دوال الإرسال التي تدعم parse_mode.'
                ]
            ]
        ]
    ]
]);
```
*ملاحظة: يمكنك إرسال الرسائل بتنسيق `HTML` العادي باستخدام `sendMessage` مع تحديد `parse_mode => 'HTML'` إذا لم ترغب في استخدام كائن `rich_message` بالكامل، وستقوم تيليجرام بتفسير العلامات الجديدة.*
