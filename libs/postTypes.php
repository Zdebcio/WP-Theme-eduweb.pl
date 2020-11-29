<?php

function lovetoeat_init_postTypes()
{
    /* Register Recipes Post Type */

    $recipes_args = [
        'labels' => [
            'name' => 'Przepisy',
            'singular_name' => 'Przepisy',
            'all_items' => 'Wszystkie przepisy',
            'add_new' => 'Dodaj nowy przepis',
            'add_new_item' => 'Dodaj nowy przepis',
            'edit_item' => 'Edytuj przepis',
            'new_item' => 'Nowy przepis',
            'view_item' => 'Zobacz przepis',
            'search_items' => 'Szukaj w przepisach',
            'not_found' => 'Nie znaleziono przepisów',
            'not_found_in_trash' => 'Brak przepisów w koszu',
            'parent_item_colon' => '',
        ],
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'herarchical' => false,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => [
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'
        ],
        'has_archive' => true,
        'menu_icon' => 'dashicons-food'
    ];

    register_post_type('recipes', $recipes_args);

    /* Register Restaurant Post Type */

    $restaurants_args = [
        'labels' => [
            'name' => 'Restauracje',
            'singular_name' => 'Restauracje',
            'all_items' => 'Wszystkie restauracje',
            'add_new' => 'Dodaj nową restaurację',
            'add_new_item' => 'Dodaj nową restaurację',
            'edit_item' => 'Edytuj restaurację',
            'new_item' => 'Nowa restauracja',
            'view_item' => 'Zobacz restauracje',
            'search_items' => 'Szukaj restauracji',
            'not_found' => 'Nie znaleziono żadnych restaurację',
            'not_found_in_trash' => 'Brak restauracji w koszu',
            'parent_item_colon' => '',
        ],
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'herarchical' => false,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => [
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
        ],
        'has_archive' => true,
        'menu_icon' => 'dashicons-store'
    ];

    register_post_type('restaurants', $restaurants_args);

    /* Register Food Fight Post Type */

    $food_fights_args = [
        'labels' => [
            'name' => 'Food Fight',
            'singular_name' => 'Food Fight',
            'all_items' => 'Wszystkie pojedynki',
            'add_new' => 'Dodaj nowy pojedynek',
            'add_new_item' => 'Dodaj nowy pojedynek',
            'edit_item' => 'Edytuj pojedynek',
            'new_item' => 'Nowy pojedynek',
            'view_item' => 'Zobacz pojedynek',
            'search_items' => 'Szukaj pojedynku',
            'not_found' => 'Nie znaleziono pojedynków',
            'not_found_in_trash' => 'Brak pojedynków w koszu',
            'parent_item_colon' => '',
        ],
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'herarchical' => false,
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => [
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ],
        'has_archive' => true,
        'menu_icon' => 'dashicons-superhero'
    ];

    register_post_type('foodfight', $food_fights_args);
}
add_action('init', 'lovetoeat_init_postTypes');

function lowtoeat_init_taxonomies()
{
    register_taxonomy(
        'ingredients',
        ['recipes'],
        [
            'hierarchical' => true,
            'labels' => [
                'name' => 'Składniki',
                'singular_name' => 'Składniki',
                'search_items' => 'Wyszukaj składniki',
                'popular_items' => 'Popularne sklładniki',
                'all_items' => 'Wszystkie składniki',
                'edit_items' => 'Edytuj składniki',
                'update_items' => 'Aktualizuj składniki',
                'add_new_item' => 'Dodaj nowy składnik',
                'new_item_name' => 'Nazwa nowego składnika',
                'separate_items_with_commas' => 'Oddziel składniki przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń składniki',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych składników',
                'menu_name' => 'Składniki'
            ],
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => [
                'slug' => 'ingredient'
            ]
        ]
    );

    //Meal Types
    register_taxonomy(
        'meal-type',
        ['recipes', 'restaurants'],
        [
            'hierarchical' => true,
            'labels' => [
                'name' => 'Typ Dania', 'taxonomy general name',
                'singular_name' => 'Typ Dania', 'taxonomy singular name',
                'search_items' => 'Wyszukaj typ dania',
                'popular_items' => 'Najpopularniejsze typy dań',
                'all_items' => 'Wszystkie typy dań',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_items' => 'Edytuj typ dania',
                'update_items' => 'Aktualizuj',
                'add_new_item' => 'Dodaj nowy typ dania',
                'new_item_name' => 'Nazwa nowego typu dania',
                'separate_items_with_commas' => 'Oddziel typy dań przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń typ dania',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych typów dań',
                'menu_name' => 'Typ Dania'
            ],
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => [
                'slug' => 'meal-type'
            ]
        ]
    );

    //Cousine Types
    register_taxonomy(
        'cousine-type',
        ['recipes', 'restaurants'],
        [
            'hierarchical' => true,
            'labels' => [
                'name' => 'Rodzaj kuchni',
                'singular_name' => 'Rodzaj kuchni',
                'search_items' => 'Wyszukaj rodzaj kuchni',
                'popular_items' => 'Najpopularniejsze rodzaje kuchni',
                'all_items' => 'Wszystkie rodzaje kuchni',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_items' => 'Edytuj rodzaj kuchni',
                'update_items' => 'Aktualizuj',
                'add_new_item' => 'Dodaj nowy rodzaj kuchni',
                'new_item_name' => 'Nazwa nowego rodzaju kuchni',
                'separate_items_with_commas' => 'Oddziel rodzaje kuchni przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń rodzaj kuchni',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych rodzajów kuchni',
                'menu_name' => 'Rodzaj kuchni'
            ],
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => [
                'slug' => 'cousine-type'
            ]
        ]
    );

    //Cities
    register_taxonomy(
        'city',
        ['restaurants'],
        [
            'hierarchical' => false,
            'labels' => [
                'name' => 'Miasto',
                'singular_name' => 'Miasto',
                'search_items' => 'Wyszukaj miasto',
                'popular_items' => 'Najpopularniejsze miasta',
                'all_items' => 'Wszystkie miasta',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_items' => 'Edytuj miasto',
                'update_items' => 'Aktualizuj',
                'add_new_item' => 'Dodaj nowe miasto',
                'new_item_name' => 'Nazwa nowego miasta',
                'separate_items_with_commas' => 'Oddziel miasta przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń miasto',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych miast',
                'menu_name' => 'Miasto'
            ],
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => [
                'slug' => 'city'
            ]
        ]
    );
};

add_action('init', 'lowtoeat_init_taxonomies');
