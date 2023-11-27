<?php

namespace Thoomi\DcatThemes;

class Themes
{
    public array $themes = [
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
        ]
    ];

    public function all(): array
    {
        return $this->themes;
    }

    public function get($name): array
    {
        $themes = $this->themes;
        if (array_key_exists($name, $themes)) {
            return $themes[$name];
        } else {
            return [];
        }
    }
}
