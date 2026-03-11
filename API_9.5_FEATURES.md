# ميزات Telegram Bot API 9.5 وكيفية استخدامها

يقدم هذا الملف شرحاً للميزات الجديدة التي تم إضافتها في إصدار **Bot API 9.5** وكيفية الاستفادة منها عبر هذه المكتبة.

## 1. نوع الكيان الجديد "تاريخ ووقت" (date_time)

تم إضافة نوع جديد لـ `MessageEntity` وهو `date_time` لعرض التواريخ والأوقات المنسقة للمستخدم.

```php
$entities = $message->getEntities();
foreach ($entities as $entity) {
    if ($entity->getType() === 'date_time') {
        // التعامل مع كيان التاريخ والوقت
    }
}
```

## 2. إدارة الوسوم للأعضاء (Chat Member Tags)

يمكن للبوتات الآن تعيين وسوم (Tags) مخصصة للأعضاء في المجموعات الفائقة (Supergroups).

```php
// تعيين وسم لعضو
Request::setChatMemberTag([
    'chat_id' => $chat_id,
    'user_id' => $user_id,
    'tag'     => 'VIP Member',
]);

// الحصول على الوسم من كائن العضو
$member = Request::getChatMember(['chat_id' => $chat_id, 'user_id' => $user_id])->getResult();
if (method_exists($member, 'getTag')) {
    echo "الوسم: " . $member->getTag();
}
```

## 3. صلاحيات إدارة الوسوم

تم إضافة صلاحيات جديدة للتحكم في من يمكنه إدارة أو تعديل الوسوم.

```php
// صلاحيات المدير
if ($member->getCanManageTags()) {
    // يمكنه إدارة وسوم الأعضاء
}

// صلاحيات العضو المقيد
if ($member->getCanEditTag()) {
    // يمكنه تعديل وسمه الخاص
}
```

## 4. وسم المرسل في الرسالة (sender_tag)

تحتوي الرسائل الآن على حقل `sender_tag` يظهر الوسم الخاص بمرسل الرسالة (في القنوات).

```php
if ($tag = $message->getSenderTag()) {
    echo "وسم المرسل: " . $tag;
}
```

---
للمزيد من التفاصيل، يرجى مراجعة [سجل تغييرات تلجرام الرسمي](https://core.telegram.org/bots/api-changelog#march-1-2026).
