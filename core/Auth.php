<?php
class Auth {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function userId() {
        return $_SESSION['user']['email'] ?? null;
    }

    public function check() {
        return isset($_SESSION['user']);
    }

    public function login($user) {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'username' => $user['username']
        ];
    }

    public function logout() {
        unset($_SESSION['user']);
        session_destroy();
    }

    public function requireAuth() {
        if (!$this->check()) {
            header('Location: ' . basePath('/login'));
            exit;
        }
    }

    public function redirectIfAuthenticated() {
        if ($this->check()) {
            header('Location: ' . basePath('/feed'));
            exit;
        }
    }
}
