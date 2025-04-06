<?php
namespace Middlewares;

class AdminMiddleware {
    public static function auth() {
        if (!isset($_SESSION["user_id"]) || !isset($_SESSION["role"]) || $_SESSION["role"] != 1) {
            header('Location: /');
            exit();
        }
    }
}
