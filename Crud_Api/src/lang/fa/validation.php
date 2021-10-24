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
	'active_url' => 'آدرس :attribute یک آدرس معتبر نیست .',
	'after' => 'خاصیت :attribute باید یک تاریخ بعد از تاریخ :date باشد .',
	'after_or_equal' => 'خاصیت :attribute باید یک تاریخ بعد یا مساوی با تاریخ :date باشد .',
	'alpha' => 'The :attribute may only contain letters.',
	'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
	'alpha_num' => 'The :attribute may only contain letters and numbers.',
	'array' => 'خاصیت :attribute باید یک آرایه باشد .',
	'before' => 'خاصیت :attribute باید یک تاریخ قبل از تاریخ :date باشد .',
	'before_or_equal' => 'خاصیت :attribute باید یک تاریخ قبل یا مساوی با تاریخ :date باشد .',
	'between' => [
		'numeric' => ':attribute باید بین :min و :max باشد .',
		'file' => ':attribute باید بین :min و :max کیلو بایت باشد .',
		'string' => ':attribute باید بین :min و :max کاراکتر باشد .',
		'array' => 'خاصیت :attribute باید بین :min و :max آیتم داشته باشد .',
	],
	'boolean' => ':attribute باید یا true باشد و یا false .',
	'confirmed' => 'The :attribute confirmation does not match.',
	'date' => ':attribute یک تاریخ معتبر نیست',
	'date_equals' => ':attribute باید یک تاریخ برابر با :date باشد .',
	'date_format' => 'فرمت :attribute با فرمت :format برابر نیست .',
	'different' => 'The :attribute and :other must be different.',
	'digits' => 'The :attribute must be :digits digits.',
	'digits_between' => 'مقدار :attribute باید یک عدد بین :min و :max باشد .',
	'dimensions' => ':attribute یک مختصات عکس نیست',
	'distinct' => 'مقدار فیلد :attribute تکراری است',
	'email' => 'مقدار :attribute باید یک ایمیل معتبر باشد .',
	'ends_with' => 'The :attribute must end with one of the following: :values.',
	'exists' => 'مقدار :attribute وجود ندارد .',
	'file' => 'مقدار :attribute باید یک فایل باشد',
	'filled' => 'فیلد :attribute باید مقدار دهی شود .',
	'gt' => [
		'numeric' => 'مقدار :attribute باید بزرگتر از :value باشد.',
		'file' => 'مقدار :attribute باید بزرگتر از :value کیلو بایت باشد.',
		'string' => 'مقدار :attribute باید بزرگتر از :value کاراکتر باشد.',
		'array' => 'مقدار :attribute باید بیشتر از :value آیتم داشته باشد.',
	],
	'gte' => [
		'numeric' => 'The :attribute must be greater than or equal :value.',
		'file' => 'The :attribute must be greater than or equal :value kilobytes.',
		'string' => 'The :attribute must be greater than or equal :value characters.',
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
		'numeric' => 'The :attribute must be less than or equal :value.',
		'file' => 'The :attribute must be less than or equal :value kilobytes.',
		'string' => 'The :attribute must be less than or equal :value characters.',
		'array' => 'The :attribute must not have more than :value items.',
	],
	'max' => [
		'numeric' => ':attribute نباید بیشتر از :max باشد .',
		'file' => ':attribute نباید بیشتر از :max کیلو بایت باشد .',
		'string' => ':attribute نباید بیشتر از :max کاراکتر داشته باشد .',
		'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد .',
	],
	'mimes' => 'The :attribute must be a file of type: :values.',
	'mimetypes' => 'The :attribute must be a file of type: :values.',
	'min' => [
		'numeric' => ':attribute باید بیشتر از :min باشد .',
		'file' => ':attribute باید بیشتر از :min کیلوبایت باشد .',
		'string' => ':attribute باید بیشتر از :min کاراکتر باشد .',
		'array' => ':attribute باید بیشتر از :min آیتم داشته باشد .',
	],
	'not_in' => 'The selected :attribute is invalid.',
	'not_regex' => 'The :attribute format is invalid.',
	'numeric' => 'The :attribute must be a number.',
	'password' => 'The password is incorrect.',
	'present' => 'The :attribute field must be present.',
	'regex' => 'The :attribute format is invalid.',
	'required' => 'فیلد :attribute اجباری است .',
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
	'timezone' => 'The :attribute must be a valid zone.',
	'unique' => 'The :attribute has already been taken.',
	'uploaded' => 'The :attribute failed to upload.',
	'url' => 'The :attribute format is invalid.',
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
			'alpha_spaces' => 'the :attribute must be an numeric alphabetic',
		],
		'name' => [
			'alpha_spaces' => 'the :attribute must be an numeric alphabetic',
		],
		'captcha' => [
			'captcha' => 'The :attribute field entered is wrong.',
		],
		'my_rule' => [
			'my_rule' => 'خاصیت :attribute می تواند شامل حروف فارسی و انگلیسی باشد',
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
		'password' => 'پسورد',
		'email' => 'ایمیل',
		'age' => 'سن',
		'file' => 'فایل',
		'field' => 'فیلد',
		'date' => 'تاریخ',
		'time' => 'ساعت',
		'numeric' => 'مقدار عددی',
		'string' => 'رشته',
		'array' => 'آرایه',
		'min' => 'کمترین',
		'max' => 'بیشترین',
		'mimes' => 'پسوند',
		'mimetypes' => 'نوع فایل',
		'after' => 'بعد از',
		'alpha' => 'حروف الفبا',
		'alpha_dash' => 'حروف الفبا و آندرلاین',
		'between' => 'مابین',
		'message' => 'پیام',
		'messages' => 'پیام ها',
		'' => '',

	],

];
