<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {

    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/app/config/config.php";

    /**
     * Read auto-loader
     */
    include APP_PATH . "/app/config/loader.php";

    /**
     * Read route
     */
    include APP_PATH . "/app/config/router.php";

    /**
     * Read route
     */
    include APP_PATH . "/app/phpmailer/class.phpmailer.php";
    include APP_PATH . "/app/phpmailer/class.pop3.php";
    include APP_PATH . "/app/phpmailer/class.smtp.php";
    include APP_PATH . "/app/phpmailer/PHPMailerAutoload.php";
    include APP_PATH . "/app/phpmailer/class.phpmaileroauth.php";
    include APP_PATH . "/app/phpmailer/class.phpmaileroauthgoogle.php";
    /**
     * Read services
     */
    include APP_PATH . "/app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
