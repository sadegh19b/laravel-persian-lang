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

    'accepted' => 'فیلد :attribute باید پذیرفته شده باشد.',
    'accepted_if' => 'فیلد :attribute وقتی که :other برابر با :value است، باید پذیرفته شود.',
    'active_url' => 'فیلد :attribute باید یک URL معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha' => 'فیلد :attribute باید فقط شامل حروف الفبای لاتین باشد.',
    'alpha_dash' => 'فیلد :attribute باید فقط شامل حروف الفبای لاتین، اعداد لاتین، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute باید فقط شامل حروف الفبا و اعداد لاتین باشد.',
    'any_of' => 'فیلد :attribute معتبر نیست.',
    'array' => 'فیلد :attribute باید آرایه باشد.',
    'ascii' => 'فیلد :attribute باید فقط شامل کاراکترها و نمادهای الفبایی تک بایتی (ASCII) باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل یا برابر با :date باشد.',
    'between' => [
        'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean' => 'فیلد :attribute باید درست (True) یا نادرست (False) باشد.',
    'can' => 'فیلد :attribute حاوی یک مقدار غیرمجاز است.',
    'confirmed' => 'فیلد :attribute با فیلد تکرار مطابقت ندارد.',
    'contains' => 'فیلد :attribute فاقد یک مقدار الزامی است.',
    'current_password' => 'رمز عبور فعلی اشتباه است.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید برابر با :date باشد.',
    'date_format' => 'فیلد :attribute با الگوی :format مطابقت ندارد.',
    'decimal' => 'فیلد :attribute باید دارای :decimal رقم اعشار باشد.',
    'declined' => 'فیلد :attribute باید رد شود.',
    'declined_if' => 'فیلد :attribute وقتی :other برابر :value است، باید رد شود.',
    'different' => 'فیلد :attribute و :other باید از یکدیگر متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر فیلد :attribute نامعتبر است.',
    'distinct' => 'فیلد :attribute مقدار تکراری دارد.',
    'doesnt_end_with' => 'فیلد :attribute نباید با یکی از موارد (:values) به پایان برسد.',
    'doesnt_start_with' => 'فیلد :attribute نباید با یکی از موارد (:values) شروع شود.',
    'email' => 'فیلد :attribute باید یک ایمیل معتبر باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از موارد (:values) به پایان برسد.',
    'enum' => ':attribute انتخاب شده نامعتبر است.',
    'exists' => ':attribute انتخاب شده، معتبر نیست.',
    'extensions' => 'فیلد :attribute باید یکی از پسوندهای (:values) را داشته باشد.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید مقدار داشته باشد.',
    'gt' => [
        'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بزرگتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بزرگتر از :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => 'فیلد :attribute باید :value یا بیشتر آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بزرگتر یا برابر با :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بزرگتر یا برابر با :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر یا برابر با :value کاراکتر باشد.',
    ],
    'hex_color' => 'فیلد :attribute باید یک کد رنگ هگزادسیمال معتبر باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'integer' => 'فیلد :attribute باید عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'list' => 'فیلد :attribute باید یک لیست باشد.',
    'lowercase' => 'فیلد :attribute باید با حروف کوچک باشد.',
    'lt' => [
        'array' => 'فیلد :attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کوچکتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کوچکتر از :value باشد.',
        'string' => 'فیلد :attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte' => [
        'array' => 'فیلد :attribute باید کمتر از یا برابر با :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کوچکتر یا برابر با :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کوچکتر یا برابر با :value باشد.',
        'string' => 'فیلد :attribute باید کمتر یا برابر با :value کاراکتر باشد.',
    ],
    'mac_address' => 'فیلد :attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید بزرگتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'max_digits' => 'فیلد :attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => 'فیلد :attribute باید یکی از فرمت های :values باشد.',
    'mimetypes' => 'فیلد :attribute باید یکی از فرمت های :values باشد.',
    'min' => [
        'array' => 'فیلد :attribute نباید کمتر از :min آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید کوچکتر از :min باشد.',
        'string' => 'فیلد :attribute نباید کمتر از :min کاراکتر باشد.',
    ],
    'min_digits' => 'فیلد :attribute باید حداقل :min رقم داشته باشد.',
    'missing' => 'فیلد :attribute باید خالی باشد.',
    'missing_if' => 'فیلد :attribute باید وقتی :other برابر با :value است، خالی باشد.',
    'missing_unless' => 'فیلد :attribute باید خالی باشد، مگر اینکه :other برابر با :value باشد.',
    'missing_with' => 'فیلد :attribute وقتی که :values موجود است، باید خالی باشد.',
    'missing_with_all' => 'فیلد :attribute وقتی که همه :values موجود باشند، باید خالی باشد.',
    'multiple_of' => 'فیلد :attribute باید یکی از :value باشد.',
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'numeric' => 'فیلد :attribute باید عدد باشد.',
    'password' => [
        'letters' => 'فیلد :attribute باید حداقل شامل یک حرف باشد.',
        'mixed' => 'فیلد :attribute باید حداقل شامل یک حرف بزرگ و یک حرف کوچک باشد.',
        'numbers' => 'فیلد :attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => 'فیلد :attribute باید حداقل شامل یک نماد باشد.',
        'uncompromised' => ':attribute داده شده در نشت داده‌ها پیدا شده است. لطفاً یک :attribute متفاوت انتخاب کنید.',
    ],
    'present' => 'فیلد :attribute باید وجود داشته باشد.',
    'present_if' => 'فیلد :attribute وقتی :other برابر با :value است، باید وجود داشته باشد.',
    'present_unless' => 'فیلد :attribute باید وجود داشته باشد، مگر اینکه :other برابر با :value باشد.',
    'present_with' => 'فیلد :attribute وقتی که :values وجود دارد، باید وجود داشته باشد.',
    'present_with_all' => 'فیلد :attribute وقتی که همه :values وجود دارند، باید وجود داشته باشد.',
    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'فیلد :attribute وقتی که :other برابر با :value است، ممنوع است.',
    'prohibited_if_accepted' => 'فیلد :attribute وقتی که :other پذیرفته شده باشد، ممنوع است.',
    'prohibited_if_declined' => 'فیلد :attribute وقتی که :other رد شده باشد، ممنوع است.',
    'prohibited_unless' => 'فیلد :attribute ممنوع است، مگر اینکه :other در :values موجود باشد.',
    'prohibits' => 'فیلد :attribute اجازه حضور :other را نمی‌دهد.',
    'regex' => 'فرمت :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => 'فیلد :attribute باید شامل ورودی‌های (:values) باشد.',
    'required_if' => 'وقتی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_if_accepted' => 'فیلد :attribute وقتی که :other پذیرفته شده باشد، الزامی است.',
    'required_if_declined' => 'فیلد :attribute وقتی که :other رد شده باشد، الزامی است.',
    'required_unless' => 'فیلد :attribute الزامی است، مگر اینکه :other در :values موجود باشد.',
    'required_with' => 'در صورت وجود :values، فیلد :attribute الزامی است.',
    'required_with_all' => 'در صورت وجود :values، فیلد :attribute الزامی است.',
    'required_without' => 'در صورت عدم وجود :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هیچ یک از :values، فیلد :attribute الزامی است.',
    'same' => 'فیلد :attribute و :other باید همانند هم باشند.',
    'size' => [
        'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
        'file' => 'فیلد :attribute باید برابر با :size کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید برابر با :size باشد.',
        'string' => 'فیلد :attribute باید برابر با :size کاراکتر باشد.',
    ],
    'starts_with' => 'فیلد :attribute باید با یکی از موارد (:values) شروع شود.',
    'string' => 'فیلد :attribute باید رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => 'فیلد :attribute قبلاً انتخاب شده است.',
    'uploaded' => 'آپلود :attribute با خطا مواجه شد.',
    'uppercase' => 'فیلد :attribute باید با حروف بزرگ باشد.',
    'url' => 'فیلد :attribute باید یک URL معتبر باشد.',
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

    'attributes' => require __DIR__.'/validation-attributes.php',

];
