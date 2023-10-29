<?php

// 【管理者】Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// 【管理者】Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('admin.about'));
});

// 【管理者】Home > About > Profile
Breadcrumbs::register('profile', function ($breadcrumbs) {
    $breadcrumbs->parent('about');
    $breadcrumbs->push('Profile', route('admin.profile'));
});

// 【管理者】Home > About > Password
Breadcrumbs::register('password', function ($breadcrumbs) {
    $breadcrumbs->parent('about');
    $breadcrumbs->push('Change Password', route('admin.password'));
});

// 【管理者】Home > About > Language
Breadcrumbs::register('language', function ($breadcrumbs) {
    $breadcrumbs->parent('about');
    $breadcrumbs->push('Language', route('admin.language'));
});

// 【管理者】Home > About > Tool
Breadcrumbs::register('tool', function ($breadcrumbs) {
    $breadcrumbs->parent('about');
    $breadcrumbs->push('Tool', route('admin.tool'));
});

// 【管理者】Home > Post
Breadcrumbs::register('post', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Post', route('admin.post'));
});

// 【管理者】Home > Post > Postlist
Breadcrumbs::register('postlist', function ($breadcrumbs) {
    $breadcrumbs->parent('post');
    $breadcrumbs->push('PostList', route('admin.postlist'));
});

// 【管理者】Home > Post > Postlist > EditPost
Breadcrumbs::register('postedit', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('postlist');
    $breadcrumbs->push($post->title, url('auth/' . $post->id));
});

// 【管理者】Home > Contact
Breadcrumbs::register('contactlist', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('admin.contactlist'));
});
