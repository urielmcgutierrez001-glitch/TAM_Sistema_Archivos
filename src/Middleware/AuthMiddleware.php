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
            header('Location: /Proyecto/public/login');
            exit;
        }
        
        return true;
    }
}
