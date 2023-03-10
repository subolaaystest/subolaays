<?php

return [


    'accepted' => 'يجب قبول الحقل :attribute',
    'active_url' => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'before' => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => 'الحقل :attribute ليس تاريخًا صحيحًا',
    'date_format' => 'لا يتوافق الحقل :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي الحقل :attribute ما بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'exists' => 'الحقل :attribute لاغٍ',
    'file' => 'The :attribute must be a file.',
    'filled' => 'الحقل :attribute إجباري',
    'image' => 'يجب أن يكون الحقل :attribute صورةً',
    'in' => 'الحقل :attribute لاغٍ',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون الحقل :attribute عنوان IP ذي بُنية صحيحة',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'يجب أن يكون الحقل :attribute نصآ من نوع JSON.',
    'max' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أصغر من :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',
        'string' => 'يجب أن يكون طول :attribute أكبر من :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => 'الحقل :attribute لاغٍ',
    'numeric' => 'يجب على الحقل :attribute أن يكون رقمًا',
    'present' => 'The :attribute field must be present.',
    'regex' => 'صيغة الحقل :attribute .غير صحيحة',
    'required' => 'الحقل :attribute مطلوب.',
    'required_if' => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all' => 'الحقل :attribute إذا توفّر :values.',
    'required_without' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',
        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',
        'array' => 'يجب أن يحتوي الحقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',
    ],
    'string' => 'يجب أن يكون الحقل :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.',
        'file' => 'يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.',
        'string' => 'يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.',
    ],


    'custom' => [
        'fullNumber' => [
            'required' => 'يجب إدخال رقم الجوال',
            'min' => 'يجب إن لا يقل طول رقم الموبايل عن 12 خانة',
        ],


        'mobile' => [
            'required' => 'يجب إدخال رقم الجوال',
            'min' => 'يجب إن لا يقل طول رقم الموبايل عن 12 خانة',
        ],


        'fullNumber' => [
            'fullPin' => 'يجب إدخال كود التحقق',
        ],

    ],


    'attributes' => [
        'trademark_id' => 'العلامة التجارية',
        'main_category_id' => 'التصنيف الرئيسي',
        'sub_Category_id' => 'التصنيف الفرعي',
        'size' => 'حجم المنتج',
        'quantity_available' => 'الكمية المتاحة',
        'duration_receiving_offers' => 'مدة استقبال العروض',
        'delivery_date' => 'يوم التوصيل',
        'delivery_time' => 'وقت التوصيل',
        'notes' => 'ملاحظاتك',
        'buyer_address_id' => 'عنوان التوصيل',
        'mobile' => 'موبايل',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'password' => 'كلمة المرور',
        'type' => 'النوع',
        'confirm_password' => 'تأكيد كلمة المرور',
        'description' => 'الوصف',
        'descriptions_en' => 'الوصف انجليزي',
        'descriptions_ar' => 'الوصف عربي',
        'full_description' => 'الوصف الكامل',
        'image' => 'الصورة',
        'cover_image' => 'الصورة',
        'opening_time' => 'وقت البدء',
        'closing_time' => 'وقت الاغلاق',
        'main_category' => 'التصنيف الرئيسي',
        'job_id' => 'المهنة',
        'profile_image' => 'الصورة',
        'sub_Category' => 'التصنيف الرئيسي',
        'user_id' => 'مزود الخدمة',
        'category_id' => 'التصنيف',
        'name_ar' => 'الاسم عربي',
        'name_en' => 'الاسم انجليزي',
        'description_ar' => 'الوصف بالعربي',
        'description_en' => 'الوصف انجليزي',
        'price' => 'السعر',
        'fullNumber' => 'الموبايل',

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'الأدوار المرفقة',
                    'dependencies' => 'المتعلقات',
                    'display_name' => 'إسم العرض',
                    'group' => 'المجموعة',
                    'group_sort' => 'ترتيب المجموعة',

                    'groups' => [
                        'name' => 'إسم المجموعة',
                    ],

                    'name' => 'الإسم',
                    'system' => 'نظام؟',
                ],

                'roles' => [
                    'associated_permissions' => 'الصلاحيات المرفقة',
                    'name' => 'الإسم',
                    'sort' => 'الترتيب',
                ],

                'users' => [
                    'active' => 'مفعل',
                    'associated_roles' => 'الأدوار المرفقة',
                    'confirmed' => 'مؤكد',
                    'mobile' => 'الموبايل',
                    'email' => 'عنوان البريد الإلكتروني',
                    'name' => 'الإسم',
                    'other_permissions' => 'الصلاحيات الأخرى',
                    'password' => 'كلمة المرور',
                    'password_confirmation' => 'تأكيد كلمة المرور',
                    'send_confirmation_email' => 'إرسال رسالة التفعيل',
                ],
            ],
        ],

        'frontend' => [
            'email' => 'عنوان البريد الإلكتروني',
            'name' => 'الإسم',
            'password' => 'كلمة المرور',
            'password_confirmation' => 'تأكيد كلمة المرور',
            'phone' => 'Phone',
            'mobile' => 'موبايل',
            'message' => 'Message',
            'old_password' => 'كلمة المرور القديمة',
            'new_password' => 'كلمة المرور الجديدة',
            'new_password_confirmation' => 'تأكيد كلمة المرور الجديدة',
        ],
    ],

];
