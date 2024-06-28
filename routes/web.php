<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function() {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function() {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-article-1',
            'title' => 'Article 1',
            'author' => 'Khairul',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus doloribus, rerum error similique quas non ullam architecto molestiae accusamus rem esse explicabo! Eaque facere, maxime laboriosam veritatis iste dolorem neque!'
        ],

        [
            'id' => 2,
            'slug' => 'judul-article-2',
            'title' => 'Article 2',
            'author' => 'Kholqi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, officiis consectetur? Alias in nihil error reiciendis similique commodi, culpa minima, quam nostrum vero atque amet, consequatur rem inventore ducimus blanditiis.'
        ]
    ]]);
});

Route::get('/posts/{slut}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-article-1',
            'title' => 'Article 1',
            'author' => 'Khairul',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus doloribus, rerum error similique quas non ullam architecto molestiae accusamus rem esse explicabo! Eaque facere, maxime laboriosam veritatis iste dolorem neque!'
        ],

        [
            'id' => 2,
            'slug' => 'judul-article-2',
            'title' => 'Article 2',
            'author' => 'Kholqi',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, officiis consectetur? Alias in nihil error reiciendis similique commodi, culpa minima, quam nostrum vero atque amet, consequatur rem inventore ducimus blanditiis.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view ('post', 
        [
            'title' => 'Single Post',
            'post' => $post
        ]
    );
});


Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact Page']);
});