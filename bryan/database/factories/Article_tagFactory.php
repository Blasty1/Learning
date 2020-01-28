<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article_tag;
use Faker\Generator as Faker;

$factory->define(Article_tag::class, function (Faker $faker) {
    return [
        'article_id' => factory(App\Article::class),
        'tag_id' => factory(App\Tag::class),
    ];
});
