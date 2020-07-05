<?php

return [

    'AnimeController@main' => [
        'table_name' => 'anime',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@characters_staff' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@characters' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@staff' => [
        'table_name' => 'anime_characters_staff',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@episodes' => [
        'table_name' => 'anime_episodes',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@episode' => [
        'table_name' => 'anime_episode',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@news' => [
        'table_name' => 'anime_news',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@forum' => [
        'table_name' => 'anime_forum',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@videos' => [
        'table_name' => 'anime_videos',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@pictures' => [
        'table_name' => 'anime_pictures',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@stats' => [
        'table_name' => 'anime_stats',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@moreInfo' => [
        'table_name' => 'anime_moreinfo',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@recommendations' => [
        'table_name' => 'anime_recommendations',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@userupdates' => [
        'table_name' => 'anime_userupdates',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],
    'AnimeController@reviews' => [
        'table_name' => 'anime_reviews',
        'ttl' => env('CACHE_DEFAULT_EXPIRE')
    ],

    'MangaController@main' => 'manga',
    'MangaController@characters' => 'manga_characters',
    'MangaController@news' => 'manga_news',
    'MangaController@forum' => 'manga_forum',
    'MangaController@pictures' => 'manga_pictures',
    'MangaController@stats' => 'manga_stats',
    'MangaController@moreInfo' => 'manga_moreinfo',
    'MangaController@recommendations' => 'manga_recommendations',
    'MangaController@userupdates' => 'manga_userupdates',
    'MangaController@reviews' => 'manga_reviews',

    'CharacterController@main' => 'characters',
    'CharacterController@pictures' => 'characters_pictures',

    'PersonController@main' => 'people',
    'PersonController@pictures' => 'people_pictures',

    'SeasonController@archive' => 'season_archive',
    'SeasonController@later' => 'season_later',
    'SeasonController@main' => 'season',

    'ScheduleController@main' => 'schedule',

    'ProducerController@main' => 'producers',
    'ProducerController@resource' => 'producers_anime',

    'MagazineController@main' => 'magazines',
    'MagazineController@resource' => 'magazines_manga',

    'UserController@recentlyOnline' => 'users_recently_online',
    'UserController@profile' => 'users',
    'UserController@history' => 'users_history',
    'UserController@friends' => 'users_friends',
    'UserController@animelist' => 'users_animelist',
    'UserController@mangalist' => 'users_mangalist',
    'UserController@recommendations' => 'users_recommendations',
    'UserController@reviews' => 'users_reviews',
    'UserController@clubs' => 'users_clubs',

    'GenreController@animeListing' => 'genres',
    'GenreController@mangaListing' => 'genres',
    'GenreController@anime' => 'genres_anime',
    'GenreController@manga' => 'genres_manga',

    'TopController@anime' => 'top_anime',
    'TopController@manga' => 'top_manga',
    'TopController@characters' => 'top_characters',
    'TopController@people' => 'top_people',
    'ReviewsController@bestVoted' => 'top_reviews',

    'SearchController@anime' => 'search_anime',
    'SearchController@manga' => 'search_manga',
    'SearchController@character' => 'search_characters',
    'SearchController@people' => 'search_people',
    'SearchController@users' => 'search_users',
    'SearchController@userById' => 'search_users_by_id',

    'ClubController@main' => 'clubs',
    'ClubController@members' => 'clubs_members',

    'ReviewsController@anime' => 'reviews',
    'ReviewsController@manga' => 'reviews',

    'RecommendationsController@anime' => 'recommendations',
    'RecommendationsController@manga' => 'recommendations',

    'WatchController@recentEpisodes' => 'watch',
    'WatchController@popularEpisodes' => 'watch',
    'WatchController@recentPromos' => 'watch',
    'WatchController@popularPromos' => 'watch',

];