<?php

require 'helpers.php';
require 'Social.php';

// Simple router class
class Router {
    private $routes = [];

    public function add($route, $callback) {
        $this->routes[$route] = $callback;
    }

    public function dispatch() {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($this->routes['POST'][$uri])) {
            call_user_func($this->routes['POST'][$uri]);
        } elseif (array_key_exists($uri, $this->routes)) {
            call_user_func($this->routes[$uri]);
        } else {
            // 404 Not Found
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    }

    public function addPost($route, $callback) {
        $this->routes['POST'][$route] = $callback;
    }

    public function getRoutes() {
        return array_keys($this->routes);
    }
}

// Initialize router
$router = new Router();

// Define routes
$router->add('', function() {
    require 'views/index.php';
});

$router->add('the-ideas', function() {
    require 'views/event.php';
});

$router->add('partnership', function() {
    require 'views/sponsorship.php';
});

$router->add('faq', function() {
    require 'views/faq.php';
});

$router->add('call-us', function() {
    require 'views/contact.php';
});

$router->add('exhibitor', function () {
    require 'views/exhibitor.php';
});

// Add POST route for form submission
$router->addPost('send-message', function() {
    // Handle form submission and send email
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        return;
    }

    // Get environment variables
    $postmarkApiKey = getenv('POSTMARK_API_KEY');
    $postmarkUrl = getenv('POSTMARK_URL');
    $postmarkSender = getenv('POSTMARK_SENDER');
    $postmarkRecipient = getenv('POSTMARK_RECIPIENT');

    $data = [
        'From' => $postmarkSender,
        'To' => $postmarkRecipient,
        'Subject' => 'New Contact Form Submission',
        'TextBody' => "Name: $name\nEmail: $email\nMessage: $message"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $postmarkUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'X-Postmark-Server-Token: ' . $postmarkApiKey
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo json_encode(['status' => 'error', 'message' => 'Error:' . curl_error($ch)]);
    } else {
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully.']);
    }
    curl_close($ch);
});

// Generate sitemap route
$router->add('generate-sitemap', function() use ($router) {
    require 'Sitemap.php';
    $sitemap = new Sitemap();

    // Get all routes and add them to the sitemap
    foreach ($router->getRoutes() as $route) {
        $url = 'https://www.matec.my/' . ($route ? $route : '');
        $sitemap->addPage($url, date('Y-m-d'), 'monthly', '0.8');
    }

    $sitemap->generateXML();
    echo "Sitemap generated successfully.";
});

// Add route for sitemap.xml
$router->add('sitemap.xml', function() {
    if (file_exists('sitemap.xml')) {
        header('Content-Type: application/xml');
        readfile('sitemap.xml');
    } else {
        // 404 Not Found
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
});

// Dispatch the request
$router->dispatch();
