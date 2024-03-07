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

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attribute : 필수 정보입니다.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

        // 이메일
        'u_email' => [
            'required' => ':attribute을 입력해주세요',
            'regex' => ':attribute을 다시 확인해주세요',
            'unique' => '이미 사용 중인 :attribute입니다',
            'max' => ':attribute은 최대 50자까지만 입력해주세요'
        ],

        // 비밀번호
        'u_password' => [
            'required' => ':attribute를 입력해주세요',
            'regex' => '보안강도 약함(8~20자 문자+숫자+특수문자 포함필요)',
            'min' => ':attribute은 최소 8자 이상 입력해주세요',
            'max' => ':attribute은 최대 20자까지만 입력해주세요'
        ],

        // 비밀번호 확인
        'u_password_confirm' => [
            'regex' => '',
            'not_regex' => ' ',
            'max' => ' ',
            'min' => ' ',
            'string' => ' ',
            'min' => [
                'numeric' => ' ',
                'file' => ' ',
                'string' => '',
                'array' => ' ',
            ],
            'same' => '비밀번호와 :attribute이 일치하지 않습니다',
        ],

        // 새 비밀번호
        'new_password' => [
            'regex' => ':attribute는 8~20자 문자+숫자+특수문자 포함해주세요',
            'not_regex' => ':attribute는 8~20자 문자+숫자+특수문자 포함해주세요',
            'max' => ':attribute는 최대 20자까지만 입력해주세요',
            'min' => [
                'numeric' => '',
                'file' => ':attribute는 최소 :min자리 이상입니다',
                'string' => '',
                'array' => '',
            ],         
        ],        
        
        // 새 비밀번호 확인
        'password_confirm' => [
            'regex' => '',
            'not_regex' => ' ',
            'max' => ' ',
            'min' => ' ',
            'string' => ' ',
            'min' => [
                'numeric' => ' ',
                'file' => ' ',
                'string' => '',
                'array' => ' ',
            ],
            'same' => '새 비밀번호와 :attribute이 일치하지 않습니다',            
            'required_with' => ':values와 :attribute이 일치하지 않습니다',  
        ],
        
        // 이름
        'u_name' => [
            'required' => ':attribute을 입력해주세요',
            'regex' => ':attribute은 한글로만 입력해주세요',
            'max' => ':attribute은 최대 50자까지만 입력해주세요'
        ],

        // 생년월일
        'u_birthdate' => [
            'required' => ':attribute을 입력해주세요 ex)YYYYMMDD',
            'regex' => ':attribute을 다시 확인해주세요',
        ],

        // 휴대폰 번호
        'u_tel' => [
            'required' => ':attribute를 입력해주세요',
            'regex' => ':attribute를 다시 확인해주세요',
            'max' => ':attribute은 최대 11자까지만 입력해주세요'
        ],

        // 우편번호
        'u_postcode' => [
            'required' => ':attribute를 입력해주세요.',
            'regex' => ':attribute는 5자리 숫자로만 입력해주세요',
            'max' => ':attribute은 최대 5자까지만 입력해주세요'
        ],

        // 기본 주소
        'u_basic_address' => [
            'required' => ':attribute를 입력해주세요.',
            'regex' => ':attribute는 한글, 숫자, 영어, -를 포함하여 입력해주세요',
            'max' => ':attribute은 최대 200자까지만 입력해주세요'
        ],

        // 상세 주소
        'u_detail_address' => [
            'max' => ':attribute은 최대 50자까지만 입력해주세요',
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
        'u_email' => '이메일',
        'u_password' => '비밀번호',
        'u_password_confirm' => '비밀번호 확인',
        'new_password' => '새 비밀번호',
        'password_confirm' => '비밀번호 확인',
        'u_name' => '이름',
        'u_birthdate' => '생년월일',
        'u_tel' => '휴대폰 번호',
        'u_postcode' => '우편번호',
        'u_basic_address' => '기본주소',
        'u_detail_address' => '상세주소',
    ],

];
