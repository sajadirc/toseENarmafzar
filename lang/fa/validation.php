<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

'accepted' => 'فیلد :attribute باید پذیرفته شود.',
    'accepted_if' => 'زمانی که :other برابر :value است، فیلد :attribute باید پذیرفته شود.',
    'active_url' => 'فیلد :attribute باید یک آدرس معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد از یا برابر با :date باشد.',
    'alpha' => 'فیلد :attribute فقط می‌تواند شامل حروف باشد.',
    'alpha_dash' => 'فیلد :attribute فقط می‌تواند شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute فقط می‌تواند شامل حروف و اعداد باشد.',
    'any_of' => 'مقدار فیلد :attribute معتبر نیست.',
    'array' => 'فیلد :attribute باید آرایه باشد.',
    'ascii' => 'فیلد :attribute فقط می‌تواند شامل کاراکترهای ASCII باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل از یا برابر با :date باشد.',

    'between' => [
        'array' => 'فیلد :attribute باید بین :min تا :max آیتم داشته باشد.',
        'file' => 'حجم فایل :attribute باید بین :min تا :max کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بین :min تا :max باشد.',
        'string' => 'فیلد :attribute باید بین :min تا :max کاراکتر باشد.',
    ],

    'boolean' => 'فیلد :attribute باید صحیح یا غلط باشد.',
    'can' => 'مقدار فیلد :attribute مجاز نیست.',
    'confirmed' => 'تأیید فیلد :attribute مطابقت ندارد.',
    'contains' => 'فیلد :attribute فاقد مقدار الزامی است.',
    'current_password' => 'رمز عبور وارد شده صحیح نیست.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید تاریخی برابر با :date باشد.',
    'date_format' => 'فرمت فیلد :attribute باید مطابق :format باشد.',
    'decimal' => 'فیلد :attribute باید دارای :decimal رقم اعشار باشد.',
    'declined' => 'فیلد :attribute باید رد شود.',
    'declined_if' => 'زمانی که :other برابر :value است، فیلد :attribute باید رد شود.',
    'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min تا :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute معتبر نیست.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'doesnt_contain' => 'فیلد :attribute نباید شامل مقادیر :values باشد.',
    'doesnt_end_with' => 'فیلد :attribute نباید به یکی از مقادیر :values ختم شود.',
    'doesnt_start_with' => 'فیلد :attribute نباید با یکی از مقادیر :values شروع شود.',
    'email' => 'فیلد :attribute باید یک ایمیل معتبر باشد.',
    'encoding' => 'فیلد :attribute باید با کدگذاری :encoding باشد.',
    'ends_with' => 'فیلد :attribute باید به یکی از مقادیر :values ختم شود.',
    'enum' => 'مقدار انتخاب شده برای :attribute معتبر نیست.',
    'exists' => 'مقدار انتخاب شده برای :attribute معتبر نیست.',
    'extensions' => 'فیلد :attribute باید یکی از پسوندهای :values را داشته باشد.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',

    'gt' => [
        'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => 'حجم فایل :attribute باید بیشتر از :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بیشتر از :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر باشد.',
    ],

    'gte' => [
        'array' => 'فیلد :attribute باید حداقل :value آیتم داشته باشد.',
        'file' => 'حجم فایل :attribute باید بیشتر یا مساوی :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بیشتر یا مساوی :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر یا مساوی :value کاراکتر باشد.',
    ],

    'hex_color' => 'فیلد :attribute باید یک رنگ هگز معتبر باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => 'مقدار انتخاب شده برای :attribute معتبر نیست.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'integer' => 'فیلد :attribute باید عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'lowercase' => 'فیلد :attribute باید با حروف کوچک باشد.',

    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => 'حجم فایل :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute نباید بیشتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
    ],

    'min' => [
        'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
        'file' => 'حجم فایل :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید حداقل :min باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
    ],
    

    'numeric' => 'فیلد :attribute باید عددی باشد.',
    'present' => 'فیلد :attribute باید موجود باشد.',
    'prohibited' => 'فیلد :attribute مجاز نیست.',
    'regex' => 'فرمت فیلد :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_if' => 'زمانی که :other برابر :value است، فیلد :attribute الزامی است.',
    'required_with' => 'زمانی که :values وجود دارد، فیلد :attribute الزامی است.',
    'same' => 'فیلد :attribute باید با :other یکسان باشد.',

    'size' => [
        'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
        'file' => 'حجم فایل :attribute باید :size کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید :size باشد.',
        'string' => 'فیلد :attribute باید :size کاراکتر باشد.',
    ],

    'string' => 'فیلد :attribute باید متن باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => 'این :attribute قبلاً ثبت شده است.',
    'uploaded' => 'بارگذاری :attribute با خطا مواجه شد.',
    'uppercase' => 'فیلد :attribute باید با حروف بزرگ باشد.',
    'url' => 'فیلد :attribute باید یک آدرس معتبر باشد.',
    'ulid' => 'فیلد :attribute باید یک ULID معتبر باشد.',
    'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',



    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'mobile' => 'شماره موبایل',
        'phone' => 'شماره تلفن',
        'title' => 'عنوان',
        'description' => 'توضیحات',
        'image' => 'تصویر',
        'file' => 'فایل',
    ],

];

