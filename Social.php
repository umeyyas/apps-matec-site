<?php

class Social {
    private static $socialLinks = [
        [
            'wow-delay' => '.35s',
            'url' => 'https://www.instagram.com/mymatecofficial?igsh=MTdzZ3BhcWZtbmF5cA==',
            'icon' => 'fa-brands fa-instagram',
            'target' => '_blank'
        ],
        [
            'wow-delay' => '.2s',
            'url' => 'https://www.facebook.com/people/MATEC-2024/61561885798386/',
            'icon' => 'fa-brands fa-facebook',
            'target' => '_blank'
        ],
        [
            'wow-delay' => '.5s',
            'url' => 'https://www.tiktok.com/@mymatecofficial?_t=ZS-8yRtlw21g9c&_r=1',
            'icon' => 'fa-brands fa-tiktok',
            'target' => '_blank'
        ],
       
       
    ];

    public static function getAll() {
        return self::$socialLinks;
    }
}
