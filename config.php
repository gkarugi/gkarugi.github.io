<?php

use Illuminate\Support\Str;

$apiUrl = rtrim(env('API_URL'), '/');
$assetUrl = rtrim(env('ASSET_URL', env('API_URL')), '/');
$apiKey = env('API_KEY');

$options = array(
    'http' => array(
        'method' => "GET",
        'header' => "api-key: " . $apiKey . "\r\n")
);

$context = stream_context_create($options);

return [
    'baseUrl' => env('BASE_URL','localhost:3000'),
    'production' => false,
    'siteName' => 'Centre for suicide research and intervention (CSRI)',
    'siteDescription' => 'Centre for suicide research and intervention (CSRI) develops comprehensive and integrated approaches to reducing life loss and effects on the society from suicide and suicidal behaviors in the Kenya and beyond.',

    // navigation menu
    'navigation' => require_once('navigation.php'),
    'collections' => [
        'posts' => [
            'extends' => '_layouts.blog-post',
            'author' => 'CSRI', // Default author, if not provided in a post
            'sort' => '-_created',
            'path' => 'blog/{title_slug}',
            'items' => function ($page) use($apiUrl, $assetUrl, $context) {
                $posts = json_decode(file_get_contents("$apiUrl/content/items/blog", false, $context), true);

                return collect($posts)->map(function ($post) use ($assetUrl) {
                    $path = $post['image']['path'] ?? null;
                    $post['title_slug'] = str_slug($post['title']);

                    $post['image']['path'] = strstr($path,'/storage/uploads')
                        ? $assetUrl . $path
                        : $assetUrl . '/storage/uploads' . $path ;

                    return $post;
                });
            },
        ],
    ],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isParent' => function ($page, $menuItem) {
        return (is_object($menuItem) && $menuItem->children);
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },

    'getDate' => function ($page, $date = null) {
        return Datetime::createFromFormat('U', $date ?? $page->_created);
    },

    'getFormattedDate' => function ($page, $date = null) {
        $carbon = \Carbon\Carbon::make(Datetime::createFromFormat('U', $date ?? $page->_created));

        return $carbon->toFormattedDayDateString();
    },

    'getAssetUrl' => function ($page, $path) use ($assetUrl) {
        return strstr($path,'/storage/uploads')
            ? $assetUrl . $path
            : $assetUrl . '/storage/uploads' . $path ;
    },

    'getTeam' => function ($page) use ($apiUrl, $context) {
        $team = json_decode(file_get_contents("$apiUrl/content/items/team",true, $context), true);

        return collect($team)->map(function ($teamMember) use ($page) {
            $teamMember['image']['path'] = $page->getAssetUrl($teamMember['image']['path'] ?? null);

            return $teamMember;
        });
    },
    'getFeaturedPost' => function ($page) use ($apiUrl, $context) {
        $posts = json_decode(file_get_contents("$apiUrl/content/items/blog", false, $context), true);

        return collect($posts)->map(function ($post) use ($page) {
                $post['image']['path'] = $page->getAssetUrl($post['image']['path'] ?? null);
                $post['title_slug'] = str_slug($post['title']);

                return $post;
            })
            ->reject(function ($value, $key) {
                return $value['featured'] == false;
            })
            ->first();
    },
    'getLatestPosts' => function ($page) use ($apiUrl, $context) {
        $posts = json_decode(file_get_contents("$apiUrl/content/items/blog", false, $context), true);

        return collect($posts)->map(function ($post) use ($page) {
                $post['image']['path'] = $page->getAssetUrl($post['image']['path'] ?? null);
                $post['title_slug'] = str_slug($post['title']);

                return $post;
            });
    },
];
