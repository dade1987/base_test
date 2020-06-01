<?php

 return [
     'adm_theme' => 'sb-admin-2-bs4',
     'enable_ads' => '1',
     'enable_packs' => [
         0 => 'backend',
         1 => 'blog',
         2 => 'extend',
         3 => 'food',
         4 => 'frontend',
         5 => 'import',
         6 => 'lu',
         7 => 'settings',
         8 => 'xra',
     ],
     'migrate_packs' => [
         0 => 'backend',
         1 => 'blog',
         2 => 'food',
         3 => 'import',
         4 => 'lu',
         5 => 'seo',
         6 => 'xra',
     ],
     'model' => [
         'amenity' => 'Modules\Blog\Models\Amenity',
         'article' => 'Modules\Blog\Models\Article',
         'bell_boy' => 'Modules\Food\Models\BellBoy',
         'cart' => 'Modules\Cart\Models\Cart',
         'cuisine' => 'Modules\Food\Models\Cuisine',
         'cuisine_cat' => 'Modules\Food\Models\CuisineCat',
         'home' => 'Modules\Blog\Models\Home',
         'ingredient' => 'Modules\Food\Models\Ingredient',
         'ingredient_cat' => 'Modules\Food\Models\IngredientCat',
         'location' => 'Modules\Food\Models\Location',
         'opening_hour' => 'Modules\Food\Models\OpeningHour',
         'page' => 'Modules\Blog\Models\Page',
         'photo' => 'Modules\Blog\Models\Photo',
         'profile' => 'Modules\Food\Models\Profile',
         'rating' => 'Modules\Blog\Models\Rating',
         'recipe' => 'Modules\Food\Models\Recipe',
         'restaurant' => 'Modules\Food\Models\Restaurant',
         'restaurant_owner' => 'Modules\Food\Models\RestaurantOwner',
         'tip' => 'Modules\Food\Models\Tip',
         'waiter' => 'Modules\Food\Models\Waiter',
     ],
     'primary_lang' => 'it',
     'pub_theme' => 'directorybs4',
     'related' => [
         'cuisine' => [
             0 => 'ingredientCat',
             1 => 'recipe',
         ],
         'home' => [
         ],
         'ingredientCat' => [
             0 => 'ingredient',
         ],
         'postCat' => [
             0 => 'post',
         ],
         'restaurant' => [
             0 => 'cuisine',
             1 => 'cuisineCat',
         ],
     ],
     'roots' => [
         0 => 'profile',
         1 => 'restaurant',
     ],
     'show_trans_key' => true,
 ];
