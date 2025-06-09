<?php

require_once BASE_PATH . '/controllers/UserController.php';
require_once BASE_PATH . '/controllers/TagController.php';
require_once BASE_PATH . '/core/Auth.php';

$user = new UserController();
$auth = new Auth();

global $render;

<<<<<<< HEAD
$router->get('/', function() use($render, $auth){
    $auth->redirectIfAuthenticated();
=======
$router->get('/', function () use ($render) {
	redirectIfAuthenticated();
>>>>>>> ce095826cd51735b03994fe175182b5d77cecfe9

    $tagController = new TagController();
    $tags = $tagController->handleFetchTags();

    $render->view('home', [
        'title' => 'Photoim',
        'tags' => $tags
    ]);
});

<<<<<<< HEAD
$router->get('/register', function() use($render, $auth){
    $auth->redirectIfAuthenticated();
    $render->setLayout('layouts/auth');
    $render->view('auth/register', ['title' => 'Register Now']);
});

$router->get('/login', function() use($render, $auth){
    $auth->redirectIfAuthenticated();
    $render->setLayout('layouts/auth');
    $render->view('auth/login', ['title' => 'Login Now']);
}); 
=======
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
>>>>>>> ce095826cd51735b03994fe175182b5d77cecfe9

$router->post('/register', fn() => $user->handleRegister());
$router->post('/login', fn() => $user->handleLogin());

<<<<<<< HEAD
$router->get('/feed', function() use($render, $auth, $user){
    $auth->requireAuth();
=======
$router->get('/feed', function () use ($render) {
	requireAuth();
	$render->setLayout('layouts/protected');
>>>>>>> ce095826cd51735b03994fe175182b5d77cecfe9

    $tagController = new TagController();
    $tags = $tagController->handleFetchTags();

<<<<<<< HEAD
    $userEmail = $auth->userId();
    $userData = $user->handleFetchUsernameAvatar($userEmail);

    $render->setLayout('layouts/protected');
    $render->view('protected/feed', [
        'title' => 'Feed',
        'tags' => $tags,
        'userData' => $userData
    ]);
});


$router->get('/logout', function() use($auth){
    $auth->logout();
    header('Location: ' . basePath('/login'));
    exit;
});
=======
	$render->view('protected/feed', ['title' => 'Feed', 'tags' => $tags]);
});

$router->get('/creation-post', function () use ($render) {
	requireAuth();
	$render->setLayout('layouts/protected');
	$render->view('protected/creation_post', ['title' => 'Create Post']);
});
>>>>>>> ce095826cd51735b03994fe175182b5d77cecfe9
