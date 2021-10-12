<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Inicio
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Home', route('blog'));
});

Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push($post->name, route('post', $post->slug));
});

Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->name, route('category', $category->slug));
});

Breadcrumbs::for('tag', function ($trail, $tag) {
    $trail->parent('blog');
    $trail->push($tag->name, route('tag', $tag->slug));
});

Breadcrumbs::for('documentation', function ($trail) {
    $trail->parent('blog');
    $trail->push('Documentación', route('documentation'));
});

