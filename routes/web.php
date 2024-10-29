<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Gilbert Simbolon',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Gilbert Simbolon',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    // dd($id);
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Gilbert Simbolon',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Gilbert Simbolon',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio inventore ratione in! Nesciunt qui laborum facere possimus, consequatur cupiditate animi, et quam magni ullam placeat velit impedit nam nemo.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
    // dd($post);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
