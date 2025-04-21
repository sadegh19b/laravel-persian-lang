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
    'active_url' => 'فیلد :attribute باید یک URL معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha' => 'فیلد :attribute باید فقط شامل حروف الفبای لاتین باشد.',
    'alpha_dash' => 'فیلد :attribute باید فقط شامل حروف الفبای لاتین، اعداد لاتین، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute باید فقط شامل حروف الفبا و اعداد لاتین باشد.',
    'array' => 'فیلد :attribute باید آرایه باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل یا برابر با :date باشد.',
    'between' => [
        'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean' => 'فیلد :attribute باید درست (True) یا نادرست (False) باشد.',
    'confirmed' => 'فیلد :attribute با فیلد تکرار مطابقت ندارد.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید برابر با :date باشد.',
    'date_format' => 'فیلد :attribute با الگوی :format مطابقت ندارد.',
    'different' => 'فیلد :attribute و :other باید از یکدیگر متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر فیلد :attribute نامعتبر است.',
    'distinct' => 'فیلد :attribute مقدار تکراری دارد.',
    'email' => 'فیلد :attribute باید یک ایمیل معتبر باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از موارد (:values) به پایان برسد.',
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
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'integer' => 'فیلد :attribute باید عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
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
    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید بزرگتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'mimes' => 'فیلد :attribute باید یکی از فرمت های :values باشد.',
    'mimetypes' => 'فیلد :attribute باید یکی از فرمت های :values باشد.',
    'min' => [
        'array' => 'فیلد :attribute نباید کمتر از :min آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید کوچکتر از :min باشد.',
        'string' => 'فیلد :attribute نباید کمتر از :min کاراکتر باشد.',
    ],
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'numeric' => 'فیلد :attribute باید عدد باشد.',
    'regex' => 'فرمت :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_if' => 'وقتی که :other برابر با :value است، فیلد :attribute الزامی است.',
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
    'url' => 'فیلد :attribute باید یک URL معتبر باشد.',
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => require __DIR__.'/validation-attributes.php',

];
