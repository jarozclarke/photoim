<?php

require_once BASE_PATH . '/controllers/UserController.php';
require_once BASE_PATH . '/controllers/TagController.php';
require_once BASE_PATH . '/core/Auth.php';

$user = new UserController();


global $render;

$router->get('/', function () use ($render) {
	redirectIfAuthenticated();

	$tagController = new TagController();
	$tags = $tagController->handleFetchTags();

	$render->view('home', [
		'title' => 'Photoim',
		'tags' => $tags
	]);
});

$router->get('/register', function () use ($render) {
	redirectIfAuthenticated();
	$render->setLayout('layouts/auth');
	$render->view('auth/register', ['title' => 'Register Now']);
});

$router->get('/login', function () use ($render) {
	redirectIfAuthenticated();
	$render->setLayout('layouts/auth');
	$render->view('auth/login', ['title' => 'Login Now']);
});

$router->post('/register', fn() => $user->handleRegister());
$router->post('/login', fn() => $user->handleLogin());

$router->get('/feed', function () use ($render) {
	requireAuth();
	$render->setLayout('layouts/protected');

	$tagController = new TagController();
	$tags = $tagController->handleFetchTags();

	$render->view('protected/feed', ['title' => 'Feed', 'tags' => $tags]);
});

$router->get('/creation-post', function () use ($render) {
	requireAuth();
	$render->setLayout('layouts/protected');
	$render->view('protected/creation_post', ['title' => 'Create Post']);
});