<?php
/**
 * Middleware de Autenticación
 * 
 * @package TAMEP\Middleware
 */

namespace TAMEP\Middleware;

use TAMEP\Core\Session;

class AuthMiddleware
{
    public function handle()
    {
        if (!Session::isAuthenticated()) {
            // Redirect to the login route. When deployed the document root is
            // the `public` folder, so use the application route `/login`.
            header('Location: /login');
            exit;
        }
        
        return true;
    }
}
