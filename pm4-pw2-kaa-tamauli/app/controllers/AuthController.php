<?php

class AuthController
{
    public function login()
    {
        require __DIR__ . '/../../views/pages/auth/login.php';
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        
        header('Location: /login');
        exit;
    }
}