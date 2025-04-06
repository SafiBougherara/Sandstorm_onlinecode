<?php
namespace Middlewares;



class AuthMiddleware{
   public static function auth(){
    if (!isset($_SESSION["user_id"])) {
        header('Location: /login');
        exit();
    }
   }
}
