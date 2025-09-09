<?php
// routes/route.php

function route($page) {
    $viewPath = __DIR__ . '/../views/';
      $controllerPath = __DIR__ . '/../server/controllers/';

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     switch ($page) {
    //         case 'submit-contact':
    //             return $controllerPath . 'MailerController.php';
    //     }
    // }

    switch ($page) {
        case 'contact':
            return $viewPath . 'contact.php';
        case 'investor-charter':
            return $viewPath . 'investor-charter.php';
        case 'complaint-data':
            return $viewPath . 'complaint-data.php';
        case 'privacy-policy':
            return $viewPath . 'privacy-policy.php';
        case 'refund-policy':
            return $viewPath . 'refund-cancellation.php';
        case 'term-conditions':
            return $viewPath . 'term-and-condition.php';
        
        
        case '':
        case '/':
        case 'home':
        default:
            return $viewPath . 'landing.php';
    }
}