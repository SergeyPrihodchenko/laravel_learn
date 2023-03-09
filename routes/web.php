<?php

use Illuminate\Support\Facades\Route;

$info = 'this is information page!';
$title = 'my once page';
$news = 'this news';
$main = 'hello users';

Route::get('/', function() use($main, $title) {
    return <<<php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
    </head>
    <body>
        <h1>$main</h1>
        <a href="./information">information</a>
        <a href="./news">news</a>
    </body>
    </html>
    php;
});
Route::get('/information', function() use($info, $title) {
    return <<<php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
    </head>
    <body>
        <h1>$info</h1>
    </body>
    </html>
    php;
});
Route::get('/news', function() use($news, $title) {
    return <<<php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
    </head>
    <body>
        <h1>$news</h1>
    </body>
    </html>
    php;
});
