<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Inicio
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Home', route('blog'));
});
/*Debido a que carga el rastro de migas antes que el post, guardo en la sessión el nombre y el slug y luego se recupera de ahí*/
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('blog');
    $trail->push($post['name'], route('post', $post['slug']));
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
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('blog');
    $trail->push('Contacto', route('contact'));
});
Breadcrumbs::for('politica', function ($trail) {
    $trail->parent('blog');
    $trail->push('politica-privacidad', route('politica'));
});

