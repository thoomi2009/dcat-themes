<?php

namespace Thoomi\DcatThemes;

class Themes
{
    // 支持的主题
    static public array $themes = [
        "cuilv" => [
            'primary' => '#20a162',
            'primary-darker' => '#20a162',
            'link' => '#20a162',
        ],
        'yunshanlan' => [
            'primary' => '#2f90b9',
            'primary-darker' => '#2f90b9',
            'link' => '#2f90b9',
        ],
        'pipahuang' => [
            'primary' => '#fca106',
            'primary-darker' => '#fca106',
            'link' => '#fca106',
        ],
        'budohnezumi' => [
            'primary' => '#5E3D50',
            'primary-darker' => '#5E3D50',
            'link' => '#5E3D50',
        ],
        'veludo' => [
            'primary' => '#096148',
            'primary-darker' => '#096148',
            'link' => '#096148',
        ],
        'qingtinglan' => [
            'primary' => '#3b818c',
            'primary-darker' => '#3b818c',
            'link' => '#3b818c',
        ],
        'hehui' => [
            'primary' => '#4a4035',
            'primary-darker' => '#4a4035',
            'link' => '#4a4035',
        ]
    ];

    // 获取全部主题
    static public function all(): array
    {
        return static::$themes;
    }

    // 根据主题名称获取对应的颜色
    static public function getColors($name): array
    {
        $themes = static::$themes;
        if (array_key_exists($name, $themes)) {
            return $themes[$name];
        } else {
            return [];
        }
    }
}
