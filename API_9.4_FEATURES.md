# ميزات Telegram Bot API 9.4 وكيفية استخدامها

يقدم هذا الملف شرحاً للميزات الجديدة التي تم إضافتها في إصدار **Bot API 9.4** وكيفية الاستفادة منها عبر هذه المكتبة.

## 1. إدارة ملف التعريف للبوت (Bot Profile Management)

يمكن للبوتات الآن تعيين وإزالة صور ملف التعريف الخاصة بها برمجياً.

```php
// تعيين صورة للملف الشخصي
Request::setMyProfilePhoto([
    'photo' => '/path/to/photo.jpg',
]);

// إزالة صورة الملف الشخصي
Request::removeMyProfilePhoto();
```

## 2. تحسينات جودة الفيديو (Video Qualities)

أصبح بإمكان البوتات الحصول على معلومات حول الجودات المتاحة للفيديو المرسل.

```php
$video = $message->getVideo();
$qualities = $video->getQualities(); // مصفوفة من VideoQuality

foreach ($qualities as $quality) {
    echo "الجودة المتاحة: " . $quality->getQuality(); // low, medium, high, best
}
```

## 3. المواضيع في المحادثات الخاصة (Private Chat Topics)

تم السماح للبوتات بإنشاء مواضيع في المحادثات الخاصة، كما تم إضافة حقل لمعرفة ما إذا كان المستخدم يسمح بذلك.

```php
// إنشاء موضوع في محادثة خاصة
Request::createForumTopic([
    'chat_id' => $user_id,
    'name'    => 'عنوان الموضوع',
]);

// التحقق من صلاحية المستخدم لإنشاء المواضيع
if ($user->getAllowsUsersToCreateTopics()) {
    // المستخدم يسمح بإنشاء المواضيع
}
```

## 4. صوتيات ملف التعريف (User Profile Audios)

يمكن للبوتات الآن جلب قائمة الملفات الصوتية المضافة لملف تعريف المستخدم.

```php
$profile_audios = Request::getUserProfileAudios(['user_id' => $user_id]);
echo "عدد الملفات الصوتية: " . $profile_audios->getTotalCount();
```

## 5. تغيير مالك الدردشة (Chat Ownership)

تم إضافة رسائل خدمة جديدة عند مغادرة مالك الدردشة أو تغيير المالك.

```php
if ($message->getChatOwnerLeft()) {
    // مالك الدردشة غادر
}

if ($message->getChatOwnerChanged()) {
    $new_owner = $message->getChatOwnerChanged()->getNewOwner();
    echo "المالك الجديد هو: " . $new_owner->getFirstName();
}
```

---
للمزيد من التفاصيل، يرجى مراجعة [سجل تغييرات تلجرام الرسمي](https://core.telegram.org/bots/api-changelog#february-9-2026).
