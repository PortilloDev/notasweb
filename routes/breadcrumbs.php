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
