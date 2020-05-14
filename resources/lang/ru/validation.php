<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute недействительный URL.',
    'after' => ':attribute должна быть дата после :date.',
    'after_or_equal' => ':attribute должна быть дата после или равна :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивание.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должна быть дата до :date.',
    'before_or_equal' => ':attribute должна быть дата до или равна :date.',
    'between' => [
        'numeric' => ':attribute должно быть между :min м :max.',
        'file' => ':attribute должно быть между :min м :max киллобайт.',
        'string' => ':attribute должно быть между :min м :max символов.',
        'array' => ':attribute должно быть между :min м :max.',
    ],
    'boolean' => ':attribute поле должно быть истинным или ложным.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'date' => ':attribute недействительная дата.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должен быть другим.',
    'digits' => ':attribute должны быть :digits цифры.',
    'digits_between' => ':attribute должно быть между :min и :max цифрами.',
    'dimensions' => 'У :attribute неверные размеры изображения.',
    'distinct' => ':attribute поле имеет повторяющееся значение.',
    'email' => ':attribute адрес эл. почты должен быть действительным.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих: :values.',
    'exists' => 'выбранный :attribute является недействительным.',
    'file' => ':attribute должен быть файл.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value киллобайт.',
        'string' => ':attribute должно быть больше чем :value символов.',
        'array' => ':attribute должно иметь больше, чем :value.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value киллобайт.',
        'string' => ':attribute должно быть больше или равно :value символов.',
        'array' => ':attribute должен иметь :value позиций или больше.',
    ],
    'image' => ':attribute должно быть изображение.',
    'in' => 'выбранный :attribute является недействительным.',
    'in_array' => ':attribute поле не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должен быть действительный IP-адрес.',
    'ipv4' => ':attribute должен быть действительный IPv4-адрес.',
    'ipv6' => ':attribute должен быть действительный IPv6-адрес.',
    'json' => ':attribute должен быть действительная JSON строка.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше чем :value.',
        'file' => ':attribute должно быть меньше чем :value киллобайт.',
        'string' => ':attribute должно быть меньше чем :value символов.',
        'array' => ':attribute должно быть меньше чем :value позиций.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file' => ':attribute должно быть меньше или равно :value киллобайт.',
        'string' => ':attribute должно быть меньше или равно :value символов.',
        'array' => ':attribute не должно иметь больше чем :value позиций.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше чем :max киллобайт.',
        'string' => ':attribute не может быть больше чем :max символов.',
        'array' => ':attribute не может иметь больше, чем :max позиций.',
    ],
    'mimes' => ':attribute должен быть файл типа: :values.',
    'mimetypes' => ':attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min киллобайт.',
        'string' => ':attribute должен быть не менее :min символов.',
        'array' => ':attribute должен иметь по крайней мере :min позиций.',
    ],
    'not_in' => 'выбранный :attribute является недействительным.',
    'not_regex' => ':attribute неверный формат.',
    'numeric' => ':attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => ':attribute поле должно присутствовать.',
    'regex' => ':attribute неверный формат.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => ':attribute поле обязательно для заполнения, когда :other является :value.',
    'required_unless' => ':attribute поле обязательно для заполнения, если :other в :values.',
    'required_with' => ':attribute поле обязательно для заполнения, когда :values настоящее.',
    'required_with_all' => ':attribute поле обязательно для заполнения, когда :values присутствует.',
    'required_without' => ':attribute поле обязательно для заполнения, когда :values не присутствует.',
    'required_without_all' => ':attribute поле обязательно для заполнения, когда ни один из :values не присутствует.',
    'same' => ':attribute и :other должен соответствовать.',
    'size' => [
        'numeric' => ':attribute должно быть :size.',
        'file' => ':attribute должно быть :size киллобайт.',
        'string' => ':attribute должно быть :size символов.',
        'array' => ':attribute must contain :size позиций.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должна быть действительной зоной.',
    'unique' => ':attribute уже зарегистрирован.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute неверный формат.',
    'uuid' => ':attribute должен быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
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
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'password' => 'Пароль',
        'email' => 'E-mail'
    ],

];
