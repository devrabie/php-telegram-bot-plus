# ميزات تحديث Bot API 10.1

يدعم هذا التحديث ميزات الإصدار 10.1 من واجهة برمجة تطبيقات تيليجرام للبوتات (Telegram Bot API) الصادر في 11 يونيو 2026.

## 1. الرسائل الغنية (Rich Messages)
تمت إضافة دعم للرسائل الغنية مما يتيح للبوتات إرسال نصوص منظمة وبث ردود تم إنشاؤها عبر الذكاء الاصطناعي مع تنسيقات غنية وسلسة.

- **الكيانات الجديدة للنصوص الغنية (Rich Text):**
  - `RichTextBold`، `RichTextItalic`، `RichTextUnderline`، `RichTextStrikethrough`، `RichTextSpoiler`
  - `RichTextDateTime`، `RichTextTextMention`، `RichTextSubscript`، `RichTextSuperscript`
  - `RichTextMarked`، `RichTextCode`، `RichTextCustomEmoji`، `RichTextMathematicalExpression`
  - `RichTextUrl`، `RichTextEmailAddress`، `RichTextPhoneNumber`، `RichTextBankCardNumber`
  - `RichTextMention`، `RichTextHashtag`، `RichTextCashtag`، `RichTextBotCommand`
  - `RichTextAnchor`، `RichTextAnchorLink`، `RichTextReference`، `RichTextReferenceLink`

- **الكيانات الجديدة للكتل الغنية (Rich Block):**
  - `RichBlockCaption`، `RichBlockTableCell`، `RichBlockListItem`، `RichBlockParagraph`
  - `RichBlockSectionHeading`، `RichBlockPreformatted`، `RichBlockFooter`، `RichBlockDivider`
  - `RichBlockMathematicalExpression`، `RichBlockAnchor`، `RichBlockList`، `RichBlockBlockQuotation`
  - `RichBlockPullQuotation`، `RichBlockCollage`، `RichBlockSlideshow`، `RichBlockTable`
  - `RichBlockDetails`، `RichBlockMap`، `RichBlockAnimation`، `RichBlockAudio`
  - `RichBlockPhoto`، `RichBlockVideo`، `RichBlockVoiceNote`، `RichBlockThinking`

- **إرسال رسائل غنية:** استخدام `Request::sendRichMessage` و `Request::sendRichMessageDraft`.

**مثال تطبيقي (هيكلي):**
```php
use Longman\TelegramBot\Request;

$response = Request::sendRichMessage([
    'chat_id'      => $chat_id,
    'rich_message' => [
        'blocks' => [
            [
                'type' => 'paragraph',
                'text' => [
                    'type' => 'bold',
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

## 4. تنسيق الرسائل عبر HTML و Markdown في الرسائل الغنية (Formatting)
تسمح تيليجرام أيضاً بتنسيق الرسائل الغنية باستخدام `HTML` أو `Markdown` دون الحاجة لتعريف هيكل `RichBlock` بالكامل عبر المصفوفات المعقدة.

**التنسيقات الجديدة المدعومة:**
- `<mark>` أو `<mark class="marked">`: لتمييز النص (Marked).
- `<sub>`: للنصوص السفلية (Subscript).
- `<sup>`: للنصوص العلوية (Superscript).
- `<details>` و `<summary>`: لإضافة كتل التفاصيل القابلة للطي (Details Block).
- `<blockquote>` مع دعم `expandable`: للاقتباسات القابلة للتوسيع.
- `<tg-math>`: للمعادلات الرياضية.
- `<tg-collage>` و `<tg-slideshow>`: لإنشاء كولاج وشرائح من الصور/الفيديوهات.
- `<tg-map lat="X" long="Y" zoom="Z"/>`: لإدراج خريطة.
- `<tg-thinking>Thinking...</tg-thinking>`: حصرية للاستخدام مع `sendRichMessageDraft`.

**كيفية كتابتها (مثال HTML):**
```php
use Longman\TelegramBot\Request;

$htmlText = '
<h1>عنوان رئيسي</h1>
<b>نص عريض</b>
<mark>نص مميز</mark>
H<sub>2</sub>O و E=mc<sup>2</sup>
<details>
  <summary>اضغط لمعرفة المزيد</summary>
  هذا النص سيكون مخفياً حتى يقوم المستخدم بتوسيعه.
</details>
<tg-math>x^2 + y^2</tg-math>
';

$response = Request::sendRichMessage([
    'chat_id'      => $chat_id,
    'rich_message' => [
        'html' => $htmlText
    ]
]);
```

**كيفية كتابتها (مثال Markdown):**
```php
use Longman\TelegramBot\Request;

$markdownText = '
# عنوان رئيسي
**نص عريض**
==نص مميز==
H~2~O و E=mc^2^
$$E=mc^2$$
';

$response = Request::sendRichMessage([
    'chat_id'      => $chat_id,
    'rich_message' => [
        'markdown' => $markdownText
    ]
]);
```

تم تحديث المكتبة بالكامل لدعم هذه الكيانات والأساليب بطريقة سهلة ومدمجة.
