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
    'exists'               => ':attribute 無効な値です',
    'file'                 => ':attribute アップロード出来ないファイルです',
    'filled'               => ':attribute 値を入力してください',
    'gt'                   => [
        'numeric' => ':attribute は :value より大きい必要があります。',
        'file'    => ':attributeは :value キロバイトより大きい必要があります。',
        'string'  => ':attribute は :value 文字より多い必要があります。',
        'array'   => ':attribute には :value 個より多くの項目が必要です。',
    ],
    'gte'                  => [
        'numeric' => ':attribute は :value 以上である必要があります。',
        'file'    => ':attribute は :value キロバイト以上である必要があります。',
        'string'  => ':attribute は :value 文字以上である必要があります。',
        'array'   => ':attribute には value 個以上の項目が必要です。',
    ],
    'image'                => ':attribute 画像は「jpg」「png」「bmp」「gif」「svg」のみ有効です',
    'in'                   => ':attribute 無効な値です',
    'in_array'             => ':attribute は :other と一致する必要があります',
    'ipv4'                 => ':attribute IPアドレス(IPv4)の書式のみ有効です',
    'ipv6'                 => ':attribute IPアドレス(IPv6)の書式のみ有効です',
    'json'                 => ':attribute 正しいJSON文字列のみ有効です',
    'lt'                   => [
        'numeric' => ':attribute は :value 未満である必要があります。',
        'file'    => ':attribute は :value キロバイト未満である必要があります。',
        'string'  => ':attribute は :value 文字未満である必要があります。',
        'array'   => ':attribute は :value 未満の項目を持つ必要があります。',
    ],
    'lte'                  => [
        'numeric' => ':attribute は :value 以下である必要があります。',
        'file'    => ':attribute は :value キロバイト以下である必要があります。',
        'string'  => ':attribute は :value 文字以下である必要があります。',
        'array'   => ':attribute は :value 以上の項目を持つ必要があります。',
    ],
    'max'                  => [
        'numeric' => ':attribute は :max 以下のみ有効です',
        'file'    => ':attribute は :max KB以下のファイルのみ有効です',
        'array'   => ':attribute は :min 個以上のみ有効です',
    ],
    'not_in'               => ':attribute 無効な値です',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute は数字のみ有効です',
    'present'              => ':attribute が存在しません',
    'regex'                => ':attribute 無効な値です',
    'url'                  => ':attribute は正しいURL書式のみ有効です',


        
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
        'title' => [
            'required' => 'あなたの叶えたい夢は何ですか？',
        ],
        
        'content' => [
            'required' => '夢をどうやって叶えますか？',
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

    'attributes' => [],

];
