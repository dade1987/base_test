<?php

$def = [
    'pub_theme' => 'jigsawcasper',
    //'adm_theme' => 'adminlte',
    'adm_theme' => 'sb-admin-2-bs4',
    'enable_ads' => '1',
    'model' => [
        //'blog' 				=>		'Modules\Blog\Models\Blog',
        'article' => 'Modules\Blog\Models\Article',
        'article_cat' => 'Modules\Blog\Models\ArticleCat',
        'photo' => 'Modules\Blog\Models\Photo',
        'home' => 'Modules\Blog\Models\Home',
        'page' => 'Modules\Blog\Models\Page',
        'feed' => 'Modules\Blog\Models\Feed',
        'sitemap' => 'Modules\Blog\Models\Sitemap',
        'place' => 'Modules\Blog\Models\Place',
        'event' => 'Modules\Blog\Models\Event',
        'rating' => 'Modules\Blog\Models\Rating',
    ],
    'roots' => [
        'restaurant',
        'profile',
        //'cuisineCat',
    ],
    'migrate_packs' => [
        'xra',
        'blog',
        'lu',
        'import',
        'seo',
        'backend',
    ],
    'enable_packs' => [
        'frontend',
        'backend',
        'lu',
        'blog',
        'extend',
        'import',
        'food',
        //  'seo',
        'xra',
        'settings',
    ],
    'primary_lang' => 'it',
    'related' => [],
    'show_trans_key' => false,
];

return $def;
